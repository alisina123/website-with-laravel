@extends('layouts.master')

@section('content')

 <div class="row" id="myapp" v-cloak>
 <div class="col-md-12">
            <div class="card">
              <div class="card-body">
            <div class="row">
            <div class="card-tools">
                    <button class="btn btn-success" onclick="location.href='{{route('subCategory.create')}}'" >@lang('lang.add') <i class="fas fa-user-plus fa-fw"></i></button>
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
                                <th> @lang('lang.category' )</th>
                                <th> @lang('lang.name' )</th>
                                <th> @lang('lang.price' )</th>
                                <th> @lang('lang.discount' )</th>
                                <th> @lang('lang.actions' ) </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(record,i) in apiData.data" :key="i">
                            
                                <td> @{{record.category_name}} </td>
                                <td> @{{record.name}} </td>
                                <td> @{{record.price}} </td>
                                <td> @{{record.discount}} </td>
                                <td> 
                                    <button class="btn btn-info btn-xs" ><i class="fa fa-info-circle"></i>@lang('lang.view')</button>
                                    </a>
                                    
                                    <button class="btn btn-info btn-xs" @click="editRecord('subCategory',record.id)"><i class="fa fa-pencil"></i>@lang('lang.edit')</button>
                                    
                                    
                                    <button class="btn btn-danger btn-xs" @click="deleteRecord(record.id)"><i class="fa fa-times"></i>@lang('lang.delete')</button>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    <pagination :data="apiData" @pagination-change-page="getRecord"></pagination>
                    
                    </div>
              </div>
            
              <!-- /.card-body -->
             
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
            axios.get('{{route("subCategory.index")}}'+
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
                axios.delete('subCategory/'+id)
                
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
       
       
         // send data for editing
        editRecord(url=null,id=null)
        {
           // console.log(id);
            if(url !=null && id !=null)
            {   
                var url="{{url('/')}}"+"/"+url+"/subCategoryEdit/"+id;
                window.location=url;
            }
        }
    }
    });
    </script>
@endpush



 