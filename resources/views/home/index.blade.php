@extends('layouts.front')


@section('content')
<!-- BEGIN: CONTENT/BLOG/RECENT-POSTS -->
<div class="c-content-box c-size-md c-bg-grey-1">
	<div class="container">
		<!-- Begin: Testimonals 1 component -->
		<div class="c-content-blog-post-card-1-slider" data-slider="owl">
			<!-- Begin: Title 1 component -->
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold">@lang('lang.services')</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
			<!-- End-->
			<!-- Begin: Owlcarousel -->
           
			<div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="3" data-slide-speed="8000" data-rtl="false"> 
				@foreach($service as $services)
			 	<div class="item">
			  		<div class="c-content-blog-post-card-1 c-option-2">		
			  			<div class="c-media c-content-overlay">
			  				<div class="c-overlay-wrapper">
				  				<div class="c-overlay-content">
					  				<a href="#"><i class="icon-link"></i></a>
					  				
					  			</div>
			  				</div>
			  				<img class="c-overlay-object img-responsive" style="width:100%;height:250px" src="{{url('uploads/services')}}/{{$services->image}}"  alt="">
			  			</div>
			  			<div class="c-body">
				  			<div class="c-title c-font-uppercase c-font-bold">
				  				<a href="/service_details/{{$services->id}}">{{$services->title}}</a>
				  			</div>
				  			<div class="c-author">
				  				 <span class="c-font-uppercase">{{$services->created_at}}</span>
				  			</div>

				  		
					  		<p>
							  {{ Str::limit($services->description,100)}}
			                </p>
		                </div>
	                </div>
			  		</div>
				  @endforeach
			  	</div>				 
			</div>
	        <!-- End-->
	    </div>
	    <!-- End-->
	</div>
</div><!-- END: CONTENT/BLOG/RECENT-POSTS -->

<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="c-content-title-1 c-margin-b-60">
					<h3 class="c-center c-font-uppercase c-font-bold">
						@lang('lang.core')
					</h3>					
					
				</div>
			</div>
		</div>

		<div class="row">
		    @foreach($core_value as $core_values)
			<div class="col-md-4 col-sm-6 wow animate fadeInLeft">
				<div class="c-content-step-1 c-opt-1">
				<div class="item">
			  		<a href="#"><img style="height:200px;width:70%;border-radius: 30px;" src="{{url('uploads/coreValue')}}/{{$core_values->image}}" alt=""/></a>
			  	</div>
					<div class="c-title c-font-20 c-font-bold c-font-uppercase">{{$core_values->title}}</div>
					<div class="c-description c-font-17">
					{{ Str::limit($core_values->description,50)}}
						
					</div>
					<button class="btn c-btn-square c-theme-btn c-btn-border1-2x c-btn-uppercase c-btn-bold">EXPLORE</button>
				</div>
			</div>
		    @endforeach
		</div>
	</div>
</div><!-- END: CONTENT/STEPS/STEPS-1 -->


<!-- BEGIN: CONTENT/STATS/COUNTER-3 -->
<div class="c-content-box c-size-md c-bg-parallax" style="background-image: url({{asset('frontend/assets//base/img/content/backgrounds/12.jpg')}}">
	<div class="container">
		<div class="c-content-counter-1">
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-white c-font-bold">We never stop improving</h3>
				<div class="c-line-center c-bg-white"></div>
			</div>	
			<div class="row c-margin-t-10">
				<div class="col-md-4" >
					<div class="c-counter c-font-white c-bordered c-border-red c-font-white" data-counter="counterup">120</div>
					<h4 class="c-title c-first c-font-white c-font-uppercase c-font-bold" style="color:Tomato;" >@lang('lang.employee')</h4>
					
				</div>
				<div class="col-md-4">
					<div class="c-counter c-font-white c-bordered c-border-blue c-font-white" data-counter="counterup">35</div>
					<h4 class="c-title c-font-white c-font-uppercase c-font-bold">@lang('lang.project')</h4>
				</div>
				<div class="col-md-4">
					<div class="c-counter c-font-white c-bordered c-border-green c-font-white" data-counter="counterup">200</div>
					<h4 class="c-title c-font-white c-font-uppercase c-font-bold">@lang('lang.store_value')</h4>
				</div>
			</div>
		</div>
	</div>
</div><!-- END: CONTENT/STATS/COUNTER-3 -->

<!-- BEGIN: CONTENT/EVENTS/EVENTS-1 -->
<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<div class="c-content-title-1 c-opt-1 wow fadeInDown">
			<h3 class="c-center c-font-bold">@lang('lang.project')</h3>
			<div class="c-line-center c-theme-bg"></div>
		</div>
		<div class="c-content-events-1">
			<div class="row">
			 @foreach($project as $project)
				<div class="col-md-4">
					<div class="c-content-events-1-item wow fadeInLeft" data-wow-delay="0.2s">
						<div class="c-content-events-1-img-container">
							<img class="c-content-events-1-img" style="width:100%;height:250px" src="{{url('uploads/projects')}}/{{$project->image}}"/>
						</div>
						<div class="c-content-events-1-content-container">
						
							<h3 class="c-content-events-1-title">{{$project->title}}</h3>
							<p class="c-content-events-1-desc">{{Str::limit($project->description,80)}}</p>
							
							<a href="https://themeforest.net/item/jango-highly-flexible-component-based-html5-template/11987314?ref=themehats" class="c-content-events-1-link">Learn More</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div><!-- END: CONTENT/EVENTS/EVENTS-1 -->
<!-- BEGIN: CONTENT/MISC/SERVICES-3 -->

<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<!-- Begin: Testimonals 1 component -->
		<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
			<!-- Begin: Title 1 component -->
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold">@lang('lang.client')</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
			<!-- End-->

			<!-- Begin: Owlcarousel -->

			<div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="2" data-slide-speed="5000" data-rtl="false"> 
			 	@foreach($clients as $clients)
			 	<div class="item">
			  		<a href="#"><img style="height:200px" src="{{url('uploads/clients')}}/{{$clients->image}}" alt=""/></a>
			  	</div>
			  	@endforeach 
			</div>
	        <!-- End-->
	    </div>
	    <!-- End-->
	</div>
</div><!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
@endsection

