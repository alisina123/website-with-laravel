
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
        <h3 class="card-title"> @lang('lang.slider') </h3>
      </div>
      
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" id="form" method="POST"  @submit.prevent="onSubmit" action="/slider/store" accept-charset="utf-8" enctype="multipart/form-data" >
       @csrf
        <div class="card-body">
        <div class="row"> 
          <div class="col-5">
            <label for="exampleInputText"> @lang('lang.slider')</label>
            

            <input id="title" name="title" value=""  autofocus="autofocus" class="form-control" type="text" v-model="form.title">
              <span v-if="allerros.title" :class="['label label-danger']">@{{ allerros.title[0] }}</span>
          </div>
         </div>

         <div class="row" >  
            <div class="col-5" >
           
            <label for="exampleInputFile">File input</label>
            <div class="input-group hdtuto control-group lst increment" >
            <input type="file" name="image"   class="myfrm form-control"  v-on:change="onImageChange">
            

          </div>
          <span  v-if="allerros.image" :class="['label label-danger']">@{{ allerros.image[0] }}</span>
            </div>
            
           </div> 
         
         
          <div class="row">
            <div class="col-2">
              <button  type="submit"  class="btn btn-block btn-outline-primary btn-sm" value="Submit"></i>
              @lang('lang.save')</button>
            </div>
          </div>
        <div>
      </form>
    </div> 
    @push('scripts')



<script type="text/javascript">
    const app = new Vue({
        el: '#app',

        data: {
            form: {
                title : '',
                image:'',
            },
            allerros: [],
            success : false,    
        },
        methods : {

         
          onImageChange(e){
                //console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            onSubmit() {
                //console.log("sfasdfasdfadsf");
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
                dataform = new FormData();
                dataform.append('title', this.form.title);
                dataform.append('image', this.image);
               // console.log(this.form.title);


                axios.post('/slider/store', dataform).then( response => {
                    console.log(response);
                   
                    this.allerros = [];
                    this.form.title = '';
                    this.success = true;
                    this.$router.push({name:'slider'});
                } ).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });
            }
        }
    });
</script>
 
@endpush
@endsection