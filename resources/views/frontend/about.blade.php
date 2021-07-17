@extends('layouts.front')


@section('content')
<!-- BEGIN: CONTENT/MISC/ABOUT-1 -->
<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 wow animated fadeInLeft">						
				<!-- Begin: Title 1 component -->
                @foreach($about as $about)
				<div class="c-content-title-1">
					<h3 class="c-font-uppercase c-font-bold">{{$about->name}}</h3>
					<div class="c-line-left c-theme-bg"></div>
				</div>
				<p>{{$about->description}}.</p>
				@endforeach
			</div>
			<div class="col-sm-6 wow animated fadeInRight">
				<div class="c-content-client-logos-1">
					<!-- Begin: Title 1 component -->
					<div class="c-content-title-1">
						<h3 class="c-font-uppercase c-font-bold">Our Clients</h3>
						<div class="c-line-left c-theme-bg"></div>
					</div>
					<!-- End-->
					<div class="c-logos">
						<div class="row">
							<div class="col-md-4 col-xs-6 c-logo c-logo-1">
								<a href="#"><img class="c-img-pos" src="../../assets/base/img/content/client-logos/client1.jpg" alt=""/></a>
							</div>
							<div class="col-md-4 col-xs-6 c-logo c-logo-2">
								<a href="#"><img class="c-img-pos" src="../../assets/base/img/content/client-logos/client2.jpg" alt=""/></a>
							</div>
							<div class="col-md-4 col-xs-6 c-logo c-logo-3">
								<a href="#"><img class="c-img-pos" src="../../assets/base/img/content/client-logos/client3.jpg" alt=""/></a>
							</div>
							<div class="col-md-4 col-xs-6 c-logo c-logo-4">
								<a href="#"><img class="c-img-pos" src="../../assets/base/img/content/client-logos/client4.jpg" alt=""/></a>
							</div>
							<div class="col-md-4 col-xs-6 c-logo c-logo-5">
								<a href="#"><img class="c-img-pos" src="../../assets/base/img/content/client-logos/client5.jpg" alt=""/></a>
							</div>
							<div class="col-md-4 col-xs-6 c-logo c-logo-6">
								<a href="#"><img class="c-img-pos" src="../../assets/base/img/content/client-logos/client6.jpg" alt=""/></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div><!-- END: CONTENT/MISC/ABOUT-1 -->
@endsection