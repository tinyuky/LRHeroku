@extends('layouts.mechanic_customer_layout')
@extends('layouts.mechanic_customer_header')
@extends('layouts.mechanic_customer_slidebar')
@extends('layouts.mechanic_customer_footer')
@section('content')
@if($cus==null)
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption">
              <span class="caption-subject font-green bold uppercase">ADD NEW CATEGORY</span>
            </div>
          </div>
          <div class="portlet-body">
            <form class="form-horizontal" role="form" action="{{route('categories.store')}}"
            method="post" novalidate="novalidate">
            {!! csrf_field() !!}
            <div class="form-body">
              <div class="form-group">
                <label for="title" class="col-md-2 control-label">Name<span class="required"
                  aria-required="true"> * </span>
                </label>
                <div class="col-md-8">
                  @if(old('name')!=null)
                  <input type="text" class="form-control" name="name"
                  placeholder="Nmae" data-required="1"
                  value="{{ old('name') }}">
                  @else
                  <input type="text" class="form-control" name="name"
                  placeholder="Name" data-required="1"
                  >
                  @endif
                  @if ($errors->has('name'))
                  <span class="help-block help-block-error danger"
                  style="color: red">{{$errors->first('name')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="row">
                <div class=" col-md-2"></div>
                <div class=" col-md-8">
                  <button type="submit" class="btn green" style="margin-right: 20px">
                    Submit
                  </button>
                  <a type="button" class="btn default" href="{{route('categories.index')}}">Cancel</a>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@else
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption">
              <span class="caption-subject font-green bold uppercase">UPDATE CATEGORY</span>
            </div>
          </div>
          <div class="portlet-body">
            <form class="form-horizontal" role="form" action="{{route('categories.up')}}"
            method="post" novalidate="novalidate">
            {!! csrf_field() !!}
            <div class="form-body">
              <div class="form-group hidden">
                <input type="text" name="id" value="{{$cus->id}}">
              </div>
              <div class="form-group">
                <label for="title" class="col-md-2 control-label">Name<span class="required"
                  aria-required="true"> * </span>
                </label>
                <div class="col-md-8">
                  @if(old('name')!=null)
                  <input type="text" class="form-control" name="name"
                  placeholder="Nmae" data-required="1"
                  value="{{ old('name') }}">
                  @else
                  <input type="text" class="form-control" name="name"
                  placeholder="Name" data-required="1" value="{{ $cus->name }}">
                  @endif
                  @if ($errors->has('name'))
                  <span class="help-block help-block-error danger"
                  style="color: red">{{$errors->first('name')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="row">
                <div class=" col-md-2"></div>
                <div class=" col-md-8">
                  <button type="submit" class="btn green" style="margin-right: 20px">
                    Submit
                  </button>
                  <a type="button" class="btn default" href="{{route('categories.index')}}">Cancel</a>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@endsection
