@extends('layouts.front')


@section('content')
<!-- BEGIN: CONTENT/MISC/TEAM-3 -->
<div class="c-content-box c-size-md c-bg-grey-1">
	<div class="container">
		<!-- Begin: Testimonals 1 component -->
		<div class="c-content-team-1-slider" data-slider="owl" data-items="3">
			<!-- Begin: Title 1 component -->
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold">@lang('lang.services')</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
			<!-- End-->
			<div class="row">
				
				@foreach($service as $services)
				<div class="col-md-4 col-sm-6 c-margin-b-25">
					<div class="c-content-person-1 c-option-2">
			  			<div class="c-caption c-content-overlay">
			  				<div class="c-overlay-wrapper">
				  				<div class="c-overlay-content">
					  				<a href="#"><i class="icon-link"></i></a>
					  				<a href="" data-lightbox="fancybox" data-fancybox-group="gallery-4">
					  					<i class="icon-magnifier"></i>
					  				</a>
					  			</div>
			  				</div>
			  				<img class="c-overlay-object img-responsive" style="height:270px;width:90%" src="{{url('uploads/services')}}/{{$services->image}}" style="width:100%" alt="">
			  			</div>
			  			<div class="c-body">
				  			<div class="c-head">
				  				<div class="c-name c-font-uppercase c-font-bold"><a href="/service_details/{{$services->id}}"> {{$services->title}}</a></div>
				  			
				  			</div>
				  			<div class="c-position">
				  				
				  			</div>
					  		<p>
							  {{ Str::limit($services->description,100)}}
			                </p>
		                </div>
	                </div>
				</div>
			  @endforeach
			  
	        <!-- End-->
	    </div>
		{!! $service->render() !!}
	    <!-- End-->
	</div>
</div><!-- END: CONTENT/MISC/TEAM-3 -->

@endsection