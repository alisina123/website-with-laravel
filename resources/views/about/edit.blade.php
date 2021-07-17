
    
@extends('layouts.master')

@section('content')
    <!-- general form elements -->
    <style>
      .table-bordered table-striped {
        display:block;
       
        overflow-y : scroll;
      }

    </style>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"> @lang('lang.about') </h3>
      </div>
      
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form"  action="{{ route('Aupdate',$about->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
      @csrf
        <div class="card-body">
        <div class="row"> 
          <div class="col-5">
            <label for="exampleInputText"> @lang('lang.ceo')</label>
            <input type="text" name="ceo"   class="form-control" value="{{$about->ceo}}"   placeholder="@lang('lang.ceo')">  
          </div>
         </div>
         <div class="col-5">
            <label for="exampleInputText"> @lang('lang.phone')</label>
            <input type="text" name="phone"   class="form-control" value="{{$about->phone}}"   placeholder="@lang('lang.phone')">  
          </div>
        
         <div class="col-5">
            <label for="exampleInputText"> @lang('lang.email')</label>
            <input type="email" name="email"   class="form-control" value="{{$about->email}}"   placeholder="@lang('lang.email')">  
          </div>
          <div class="col-5">
            <label for="exampleInputText"> @lang('lang.address')</label>
            <input type="text" name="address"   class="form-control" value="{{$about->address}}"   placeholder="@lang('lang.address')">  
          </div>
          <div class="col-5">
            <label for="exampleInputText"> @lang('lang.info')</label>
            <input type="text" name="info"   class="form-control" value="{{$about->info}}"   placeholder="@lang('lang.info')">  
          </div>
         <div class="row">  
            <div class="col-5">
            <p> <img src="{{url('uploads/about')}}/{{$about->image}}" style="height:100px" />  </p> 
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="image"   class="custom-file-input" id="exampleInputFile">
                <input type="hidden" name="old_image"  value="{{$about->image}}" class="custom-file-input" >
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="image">Upload</span>
              </div>
            </div>
            </div>
           </div> 
           <label class="control-label rq">@lang('lang.history')
                                <!-- <span class="rq">*</span> -->
        </label>
        <div class="row"> 
         <div class="col-8">
                <textarea class="" name="history"
                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;">{{$about->history}}</textarea>
            </div>
         </div> 
        <label class="control-label rq">@lang('lang.about')
                                <!-- <span class="rq">*</span> -->
        </label>
        <div class="row"> 
         <div class="col-8">
                <textarea class="" name="about_us"
                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;">{{$about->about_us}}</textarea>
            </div>
         </div> 
         <label class="control-label rq">@lang('lang.mission')
                                <!-- <span class="rq">*</span> -->
        </label>
         <div class="row" style="margin-top:10px"> 
         <div class="col-8">
                <textarea class="" name="mission"
                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;">{{$about->mission}}</textarea>
            </div>
         </div>
         <label class="control-label rq">@lang('lang.vision')
                                <!-- <span class="rq">*</span> -->
        </label>
         <div class="row" style="margin-top:10px"> 
         <div class="col-8">
                <textarea class="" name="vision"
                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;">{{$about->vision}}</textarea>
            </div>
         </div>
         <label class="control-label rq">@lang('lang.business_model')
                                <!-- <span class="rq">*</span> -->
        </label>
         <div class="row" style="margin-top:10px"> 
         <div class="col-8">
                <textarea class="" name="business_model"
                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;">{{$about->business_model}}</textarea>
            </div>
         </div>
          <div class="row" style="margin-top:10px">
            <div class="col-2">
              <button type="submit" class="btn btn-block btn-outline-primary btn-sm" value="Submit"></i>
              @lang('lang.save')</button>
            </div>
          </div>
        <div>
      </form>
    </div> 
  
@endsection