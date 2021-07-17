
    
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
      <form role="form" id="" method="post" action="{{route('about.store')}}" accept-charset="utf-8" enctype="multipart/form-data" >
       @csrf
        <div class="card-body">
        <div class="row"> 
            <div class="col-4">
              <label for="exampleInputText"> @lang('lang.ceo')</label>
              <input type="text" name="ceo"   class="form-control"   placeholder="@lang('lang.ceo')">  
            </div>
            <div class="col-4">
              <label for="exampleInputText"> @lang('lang.phone')</label>
              <input type="text" name="phone"   class="form-control"   placeholder="@lang('lang.phone')">  
            </div>
            <div class="col-4">
              <label for="exampleInputText"> @lang('lang.email')</label>
              <input type="email" name="email"   class="form-control"   placeholder="@lang('lang.email')">  
            </div>
         </div>
         <div class="row"> 
         <div class="col-4">
            <label for="exampleInputText"> @lang('lang.info')</label>
            <input type="text" name="info"   class="form-control"   placeholder="@lang('lang.info')">  
          </div>
        
         <div class="col-4">
            <label for="exampleInputText"> @lang('lang.address')</label>
            <input type="text" name="address"   class="form-control"   placeholder="@lang('lang.address')">  
          </div>
          <div class="col-4">
            <label for="exampleInputFile">@lang('lang.image')</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="image">Upload</span>
              </div>
            </div>
            </div>
         </div>
        
         


         <div class="row">  
           
           </div>
           <label class="control-label rq">@lang('lang.history')
                                <!-- <span class="rq">*</span> -->
        </label>
        <div class="row" style="margin-top:10px"> 
         <div class="col-7">
               
                 <textarea cols="" rows="5" name="history" id="editor1" class="form-control ckeditor" style="max-width: 100%;"></textarea>

            </div>
         </div> 
        <label class="control-label rq">@lang('lang.about')
                                <!-- <span class="rq">*</span> -->
        </label>
        <div class="row" style="margin-top:10px"> 
         <div class="col-7">
               
                 <textarea cols="" rows="5" name="about_us" id="editor1" class="form-control ckeditor" style="max-width: 100%;"></textarea>

            </div>
         </div>  
         <label class="control-label rq">@lang('lang.mission')
                                <!-- <span class="rq">*</span> -->
        </label>
        <div class="row" style="margin-top:10px"> 
         <div class="col-7">
               
                 <textarea cols="" rows="5" name="mission" id="editor1" class="form-control ckeditor" style="max-width: 100%;"></textarea>

            </div>
         </div> 
         <label class="control-label rq">@lang('lang.vision')
                                <!-- <span class="rq">*</span> -->
        </label>
        <div class="row" style="margin-top:10px"> 
         <div class="col-7">
               
                 <textarea cols="" rows="5" name="vision" id="editor1" class="form-control ckeditor" style="max-width: 100%;"></textarea>

            </div>
         </div> 
        
     
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