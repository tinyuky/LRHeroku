<?php
use App\User;
use App\Customer;
use App\product;
use App\Cart;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test',function(){
	$user =User::find(1);
	//return view('layouts.mechanic_home_header',['post'=>$user]);
	$cus = Customer::find(1);
	return view('pages.customer.customer')->with('user',$user)->with('cus','abc');
})->name('test');

Route::resource('customer','CustomerCRUDController');
Route::get('searchcus', 'CustomerCRUDController@showfromsearch')->name('customer.searchform');
Route::post('customer/update', 'CustomerCRUDController@update')->name('customer.up');
Route::post('customer/preview', 'CustomerCRUDController@preview')->name('customer.preview');
Route::post('customer/preview/save', 'CustomerCRUDController@store')->name('customer.previewstore');
Route::post('customer/preview/update', 'CustomerCRUDController@update')->name('customer.previewup');

Route::resource('product','ProductCRUDController');
Route::post('product/preview', 'ProductCRUDController@preview')->name('product.preview');
Route::post('product/preview/save', 'ProductCRUDController@store')->name('product.previewstore');
Route::post('product/preview/update', 'ProductCRUDController@update')->name('product.previewup');
Route::get('search','ProductCRUDController@search')->name('product.search');
Route::get('show','ProductCRUDController@showlist')->name('product.showlist');
Route::get('show/{id}','ProductCRUDController@getinfo')->name('product.getinfo');

Route::get('index','FrontEnd\ShopController@index')->name('shop.index');
Route::resource('categories','Backend\CategoriesController');
route::post('categories/up','Backend\CategoriesController@update')->name('categories.up');
Route::resource('branches','Backend\BranchesController');
route::post('branches/up','Backend\BranchesController@update')->name('branches.up');
route::get('shop/test',function(){
  $user = product::all();
  return view('frontend.pages.product_detail')->with('posts',$user);
});
// Route::get('shop/{cate}/{branch}','FrontEnd\ShopController@showfromlink')->name('shop.showfromlink');
// Route::get('shop/branch={branch}','FrontEnd\ShopController@showfromlinkbr')->name('shop.showfromlinkbr');
Route::get('index/id={id}','FrontEnd\ShopController@showinfo')->name('shop.showinfo');
Route::post('product/create/getcate','ProductCRUDController@getcate')->name('product.getcate');

Route::post('addcart','FrontEnd\ShopController@addCart')->name('shop.addcart');
Route::post('deletecart','FrontEnd\ShopController@deleteCart')->name('shop.deletecart');
Route::post('removecart','FrontEnd\ShopController@removeCart')->name('shop.removecart');
Route::get('index/cart','FrontEnd\ShopController@viewCart')->name('shop.viewcart');
Route::get('shop','FrontEnd\ShopController@shop')->name('shop.shop');
Route::get('shop/{name}','FrontEnd\ShopController@shopbycate')->name('shop.shop.cate');
Route::post('fillshop','FrontEnd\ShopController@ajaxsearch')->name('shop.fillshop');
Route::post('langmul', 'FrontEnd\ShopController@changeLang')->name('shop.mullang');
