
@extends('layouts.master')

@section('content')
    <!-- general form elements -->
    <style>
      .table-bordered table-striped {
        display:block;
       
        overflow-y : scroll;
      }

    </style>
    
    <div class="card card-primary" id="app" v-cloak>
      <div class="card-header">
        <h3 class="card-name"> @lang('lang.subCategories') </h3>
      </div>
    
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" id="form" method="POST"   action="" accept-charset="utf-8" enctype="multipart/form-data" >
       @csrf
        <div class="card-body">
        <div class="row"> 
        <div class="col-4">
          <label>@lang('lang.category')</label>
          <select class="form-control select2bs4" name="category" >
            @foreach($service as $services)
            <option value="{{$services->id}}">{{$services->name}}</option>
            @endforeach
          </select>
  
        </div>
         </div>
        <div class="row">    
          <div class="col-4">
            <label for="exampleInputText"> @lang('lang.title')</label>
            <input id="title" name="title"    class="form-control" type="text" >
            <span style="color:red">{{ $errors->first('title') }}</span>
          </div>
         </div>
        
         <div class="row">
            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>@lang('lang.description')</label>
                <textarea class="form-control" rows="3"   name="description" placeholder="Enter ..."></textarea>
                <span style="color:red">{{ $errors->first('description') }}</span>
              </div>
            </div>
            </div>
            <div class="row" id="more_photo">  
            <div class="col-5" >
           

            <label for="exampleInputFile">File input</label>
            <div class="input-group hdtuto control-group lst increment" >
            <input type="file" name="file_name[]" multiple="multiple" class="myfrm form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
            </div>
          </div>
           

            </div>

           </div> 
           
           <span style="color:red">{{ $errors->first('image') }}</span>
          <div class="row" style="margin-top:10px">
            <div class="col-2">
              <button  type="submit"  class="btn btn-block btn-outline-primary btn-sm" value="Submit"></i>
              @lang('lang.save')</button>
            </div>
          </div>
        <div>
      </form>
    </div> 

<script type="text/javascript">
        $(function () {
            $('#form').submit(function (){
                // Display a success toast, with a title
                toastr.info('Successfully Inserted !');
            });
        });
        </script>
  <script>
   function addMore(el){

    temp = $(el).parent().parent().html();
    //console.log(temp)
    $('#more_photo').append('<div>'+temp+'</div>'); 
    $(el).parent().remove();   
    }
    </script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function (){
                // Display a success toast, with a title
                toastr.info('Successfully Inserted !');
            });
        });
        </script>
@endsection