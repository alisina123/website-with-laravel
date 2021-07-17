
    
@extends('layouts.master')

@section('content')
    <!-- general form elements -->
    <style>
      .table-bordered table-striped {
        display:block;
       
        overflow-y : scroll;
      }

    </style>
    <div class="card card-primary" id="#myapp">
      <div class="card-header">
        <h3 class="card-title"> @lang('lang.storeValue') </h3>
      </div>
      
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form"  action="{{ route('storeValueUpdate',$storeValue->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
       @csrf
        <div class="card-body">
        <div class="row"> 
          <div class="col-5">
            <label for="exampleInputText"> @lang('lang.storeValue')</label>
            <input type="text" name="title" value="{{$storeValue->title}}"   class="form-control"   placeholder="@lang('lang.title')">  
          </div>
         </div>
         <div class="col-5">
            <p> <img src="{{url('uploads/storeValue')}}/{{$storeValue->image}}" style="height:100px" />  </p> 
            <div class="input-group">
            
              <div class="custom-file">
             

                <input type="file" name="image"   class="custom-file-input" id="exampleInputFile">
                <input type="hidden" name="old_image"  value="{{$storeValue->image}}" class="custom-file-input" >
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="image">Upload</span>
              </div>
            </div>
            </div>
         
        <div>
         <div class="row" style="margin-top:10px"> 
         <div class="col-7">
                <textarea class="textarea" name="description" storeValue
                style="width: 100%; height: 400px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;"> {{$storeValue->description}}</textarea>
            </div>
         </div> 
         <div class="row">
            <div class="col-2">
              <button type="submit" class="btn btn-block btn-outline-primary btn-sm" value="Submit"></i>
              @lang('lang.save')</button>
            </div>
          </div>
        </div>
        
      </form>
    </div> 

  

@endsection