@extends('layouts.front')


@section('content')
<!-- BEGIN: CONTENT/MISC/TEAM-3 -->
<!--------------------Body Section Start----------------->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 m-t-50">
            <h2 class="text-center heading underline"></h2>
            
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-xs-12">
        @foreach($services as $services)
            <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-xs-12 m-t-50">
                    <div class="zoom thumb_zoom section-top-5">
                        <img src="{{url('uploads/services')}}/{{$services->image}}" style="heigth:300px" alt="image-missing" class="img-responsive">
                    </div>
                </div>
            </div>
            <hr class="section-top-align">
            <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hr_blog font14">
                <h7>{{$services->title}}</h7>
                </div>
            </div>
           
            <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-xs-12">
                    <div class="text-justify">
                        <p>{{$services->description}}.</p>
                        
                    </div>
                </div>
            </div>
          @endforeach
        </div>

        
    </div>
</div>
@endsection