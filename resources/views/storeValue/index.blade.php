@extends('layouts.master')

@section('content')

 <div class="row" id="myapp" v-cloak>
 <div class="col-md-12">
            <div class="card">
              <div class="card-body">
             
            <div class="row">
            <div class="card-tools">
                    <button class="btn btn-success" onclick="location.href='{{route('storeValue.create')}}'" >ADD <i class="fas fa-user-plus fa-fw"></i></button>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <label>@lang('lang.show' )</label>
                         <select class="form-control" v-model="perPage" @change="getRecord()">
                             <option v-for="item in [5,10,20,50]" :key="item" :value="item">@{{item}}</option>
                         </select>

                    </div>
                   
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <input type="text" placeholder="@lang('lang.search')" class="form-control" v-model="search" @keyup="getRecord()">
                       </div>
                    </div>
                </div>
            </div>
        </div>

              <div class="table-responsive table-striped table-bordered">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> @lang('lang.photo' )</th>
                                <th> @lang('lang.title' )</th>
                                <th> @lang('lang.description' )</th>
                                <th> @lang('lang.actions' ) </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(record,i) in apiData.data" :key="i">
                                <td> 
                                <img :src="imagePath(record.image)" style="height:100px" />
                                 </td>
                                <td> @{{record.title}} </td>
                                <td> @{{record.description}} </td>
                                <td> 
                                    <a to="'/backend/itemCategory/'+record.id'">
                                    <button class="btn btn-info btn-xs" ><i class="fa fa-info-circle"></i>@lang('lang.view')</button>
                                    </a>
                                    
                                    <button class="btn btn-info btn-xs" @click="editRecord('storeValue',record.id)"><i class="fa fa-pencil"></i>@lang('lang.edit')</button>
                                    
                                    
                                    <button class="btn btn-danger btn-xs" @click="deleteRecord(record.id)"><i class="fa fa-times"></i>@lang('lang.delete')</button>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    <pagination :data="apiData" @pagination-change-page="getRecord" :limit="1"></pagination>
                    
                    </div>
              </div>
            
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-left">
                
                </ul>
              </div>
            </div>
            <!-- /.card -->
 </div>
 
@endsection
@push('scripts')

    <script>

    vm= new Vue({
        el:'#myapp',
        data(){
        return{
            apiData:{},
            search:'',
            perPage:10,
        }
    },
    mounted:function(){

    this.getRecord();
    },
    methods:{
        /**
         * get record from api 
         */
        getRecord(page=1)
        {
            axios.get('{{route("storeValue.index")}}'+
            '?page='+
            page+'&per_page='+this.perPage+'&search='+this.search)
            .then((response)=>{
                this.apiData=response.data;
            })
            .catch((error)=>{
                console.log(error);
            });
        },
              //delete record
       

        deleteRecord(id){
             Swal.fire({
              title: 'Are you sure?',
              text: "You Delete!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                
              if (result.value)
              {
                //console.log(id);
                axios.delete('storeValue/'+id)
                
               {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
               
               }

              }
                
              this.getRecord();
               
            }).catch(()=> {
                Swal.fire("Failed!", "There was something wronge.", "warning");
                });
                                 
                   
          },
         // return image path
        imagePath(name=null)
        {
            var path='';
            if(name !=null)
            {
                var path="{{url('/')}}"+"/uploads/storeValue/"+name;
            // var path="public/"+"uploads/item/"+name;
            }
            return path;
        },
       
         // send data for editing
        editRecord(url=null,id=null)
        {
           // console.log(id);
            if(url !=null && id !=null)
            {   
                var url="{{url('/')}}"+"/"+url+"/storeValueEdit/"+id;
                window.location=url;
            }
        }
    }
    });
    </script>
@endpush

 

 