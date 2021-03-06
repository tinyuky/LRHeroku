<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use File;
use Purifier;

class CustomerCRUDController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function __construct()
  {
    $this->middleware('auth:web');
  }

  public function index()
  {
    $user = User::find(1);
    $post = Customer::sortable()->paginate(5);
    return view('pages.home.home')->with('user',$user)->with('post',$post);


  }



  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $user =User::find(1);
    return view('pages.customer.customer')->with('user',$user)->with('cus',null);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Customer::create([
      'name'=> $request->name,
      'gender'=> $request->gender,
      'phone'=> $request->phone,
      'email'=> $request->email,
      'content'=> Purifier::clean($request->content)
    ]);
    $a = Customer::where('email',$request->email)->first();
    if($request->date!=null){
      $date = date('Y-m-d', strtotime(str_replace('-', '/', $request->date)));
      $a->date = $date;
    }
    if(Storage::exists('public/preview.jpeg')){
      $cop = Storage::copy('public/preview.jpeg', 'public/'.$request->phone.'.jpeg');
      Storage::delete('public/old.jpeg');
      Storage::delete('public/preview.jpeg');
      $a->avatar = 'storage/'.$request->phone.'.jpeg';
    }
    else{
      $a->avatar = 'storage/avatar.jpeg';
    }
    $a->save();
    return redirect()->route('customer.index')->with('status','CUSTOMER ADDED!');



  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function showfromsearch(Request $request)
  {
    $this->validate($request,array(
      'name' => 'max:255',
      'gender' => 'max:255',
    ));
    if($request->email!=null){
      $this->validate($request,array(
        'email' => 'email|max:255',
      ));
    }
    if($request->phone!=null){
      $this->validate($request,array(
        'phone' => 'numeric',
      ));
    }
    if($request->from!=null){
      $this->validate($request,array(
        'from'=>'date',
      ));
    }
    if($request->to!=null){
      $this->validate($request,array(
        'to'=>'date',
      ));
    }

    $user =User::find(1);
    $str = str_replace('%40', '@', $request->email);
    if($request->gender==null){
      $cus = Customer::where('name','like','%'.$request->name.'%')
      ->where('phone','like','%'.$request->phone.'%')
      ->where('email','like','%'.$str.'%')->sortable()->paginate(5);
    }
    else{
      $cus = Customer::where('name','like','%'.$request->name.'%')
      ->where('gender',$request->gender)
      ->where('phone','like','%'.$request->phone.'%')
      ->where('email','like','%'.$str.'%')->sortable()->paginate(5);
    }

    if($request->from!=null){
      $fr = date('Y-m-d', strtotime(str_replace('-', '/', $request->from)));
      $to = date('Y-m-d', strtotime(str_replace('-', '/', $request->to)));
      if($request->gender==null){
        $cus = Customer::where('name','like','%'.$request->name.'%')
        ->where('phone','like','%'.$request->phone.'%')
        ->where('email','like','%'.$str.'%')->where('date','>=',$fr)->where('date','<=',$to)->sortable()->paginate(5);
      }
      else{
        $cus = Customer::where('name','like','%'.$request->name.'%')
        ->where('gender',$request->gender)
        ->where('phone','like','%'.$request->phone.'%')
        ->where('email','like','%'.$str.'%')->where('date','>=',$fr)->where('date','<=',$to)->sortable()->paginate(5);
      }

    }
    if($cus!=null){
      $url = $request->fullUrl();
      return view('pages.home.home')->with('user',$user)->with('post',$cus)->with('url',$url);
    }
    else{
      return redirect()->back()->with('message','CUSTOMER NOT EXIST');
    }

  }

  public function show($id){
    $user =User::find(1);
    $cus = Customer::find($id);
    return view('pages.customer.customer')->with('user',$user)->with('cus',$cus);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    $cus = Customer::find($request->id);
    if(Storage::exists('public/preview.jpeg')){

      Storage::delete('public/'.str_replace('storage/','',$cus->avatar));
      $cop1 = Storage::copy('public/preview.jpeg', 'public/'.$request->phone.'.jpeg');
      $cus->avatar = 'storage/'.$request->phone.'.jpeg';
      Storage::delete('public/old.jpeg');
      Storage::delete('public/preview.jpeg');

    }
    $cus->name = $request->input('name');
    $cus->gender = $request->input('gender');
    $cus->phone = $request->input('phone');
    $cus->email = $request->input('email');
    $cus->content = Purifier::clean($request->input('content'));
    if($request->input('date')!=null){
      $date = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('date'))));
      $cus->date = $date;
    }


    $cus->save();
    return redirect()->route('customer.index')->with('status','CUSTOMER UPDATED!');





  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $user = Customer::find($id);
    $user->delete();
    //return redirect()->route('customer.index')->with('status', 'CUSTOMER DELETED!');
    return redirect()->back();
  }

  public function preview(Request $request){
    Storage::delete('public/old.jpeg');
    Storage::delete('public/preview.jpeg');
    if($request->file!=null){
      if(Storage::exists('public/old.jpeg')){
        Storage::delete('public/old.jpeg');
      }
      $savedurl = $request->file->storeAs('public','old.jpeg');
    }
    if($request->id==null){
      $this->validate($request,array(
        'name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'phone' => 'required|numeric|unique:customer,phone',
        'email' => 'required|string|email|max:255|unique:customer,email',
        'content' => 'required|string|max:255',
        'file'=> 'image|max:3027',
      ));

      if($request->file!=null){
        $saveprview = $request->file->storeAs('public','preview.jpeg');
      }
      else{
        $cop = Storage::copy('public/old.jpeg', 'public/preview.jpeg');
      }
      $user =User::find(1);
      return view('pages.customer.preview')->with('request',$request)->with('user',$user);
    }
    else{
      $data = $request->all();
      $this->validate($request,array(
        'name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'phone' => 'numeric',
        'email' => 'email|max:255',
        'content' => 'required|string|max:255',
        'file'=> 'image|max:3027',
      ));

      $cus = Customer::find($request->id);
      Validator::make($data, [
        'email' => [
          'required',
          Rule::unique('customer')->ignore($cus->id),
        ],
        'phone' => [
          'required',
          Rule::unique('customer')->ignore($cus->id),
        ],
      ]);

      if($request->file!=null){
        $saveprview = $request->file->storeAs('public','preview.jpeg');
      }
      else{
        $cop = Storage::copy('public/'.str_replace('storage/','',$cus->avatar), 'public/preview.jpeg');

      }
      $user =User::find(1);
      return view('pages.customer.preview')->with('request',$request)->with('user',$user);

    }

  }
}
