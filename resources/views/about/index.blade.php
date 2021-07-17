@extends('layouts.master')

@section('content')

 <div class="row">
 <div class="col-md-12">
            <div class="card">
              <div class="card-body">
             
              <form id="" action="{{route('about.index')}}" method="get">
              <div class="card-tools float-right" >
                  <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="Search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            
              <a class="btn btn-app "  href="{{route('about.create')}}">
                  <i class="fas fa-plus"></i> @lang('lang.add')
                </a>
              </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                    <th>@lang('lang.no')</th>
                    <th>@lang('lang.about')</th>
                    <th>@lang('lang.vision')</th>
                    <th>@lang('lang.mission')</th>
                    <th>@lang('lang.edit')</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $x=1?>
	                @foreach($about as $abouts)
                    <tr>
                     <td>{{$x}}</td>
                     <td>{{$abouts->about_us}}</td>
                     <td>{{$abouts->vision}}</td>
                     <td>{{$abouts->mission}}</td>

                      <td>
                      <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars"></i></button>
                        <div class="dropdown-menu float-right" role="menu">
                        <a href="/Aedit/{{$abouts->id}}" class=" dropdown-item fa fa-edit " ></a>
                        <a href="/Adelete/{{$abouts->id}}" class=" dropdown-item fa fa-save swalDefaultSuccess"  style="color:red"></a>

                        </div>
                    </div>
                      </td>
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
               
              </div>
              <?php $x++;?>
              {{ $about->links() }}
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-left">
                
                </ul>
              </div>
            </div>
            <!-- /.card -->
 </div>
 <script>

   
  
</script>
@endsection



