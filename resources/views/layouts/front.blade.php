
<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.1
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Web Site</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
    @if(App::getLocale()=='en')
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="{{asset('frontend/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css"/>		
	<link href="{{asset('frontend/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN: BASE PLUGINS  -->
	<link href="{{asset('frontend/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css"/>
		<!-- END: BASE PLUGINS -->
    <!-- BEGIN THEME STYLES -->
	<link href="{{asset('frontend/assets/demos/default/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/demos/default/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="{{asset('frontend/assets/demos/default/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="{{asset('frontend/assets/demos/default/css/custom.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
     @else
	 <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="{{asset('rtl/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css"/>		
	<link href="{{asset('rtl/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/animate/animate.min.css" rel="stylesheet')}}" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN: BASE PLUGINS  -->
	<link href="{{asset('rtl/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css"/>
		<!-- END: BASE PLUGINS -->
	
	
    <!-- BEGIN THEME STYLES -->
	<link href="{{asset('rtl/assets/demos/default/css/plugins-rtl.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/demos/default/css/components-rtl.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="{{asset('rtl/assets/demos/default/css/themes/default-rtl.css')}}" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="{{asset('rtl/assets/demos/default/css/custom-rtl.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	@endif
	<link rel="shortcut icon" href="favicon.ico"/>
</head><body class="c-layout-header-fixed c-layout-header-6-topbar"> 
	

	<!-- BEGIN: LAYOUT/HEADERS/HEADER-2 -->
<!-- BEGIN: HEADER 2 -->
@include('layouts.header')
<!-- END: HEADER 2 --><!-- END: LAYOUT/HEADERS/HEADER-2 -->
	
	<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->

	<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
		
  
<nav class="c-layout-quick-sidebar">
	<div class="c-header">
		<button type="button" class="c-link c-close">
		<i class="icon-login"></i>		
		</button>
	</div>
	<div class="c-content">
		<div class="c-section">
			<h3>JANGO DEMOS</h3>
			<div class="c-settings c-demos c-bs-grid-reset-space">	
				<div class="row">
					<div class="col-md-12">
						<a href="../default/index.html" class="c-demo-container c-demo-img-lg">
							<div class="c-demo-thumb active">
								<img src="{{asset('frontend/assets/base/img/content/quick-sidebar/corporate_1.jpg')}}" class="c-demo-thumb-img"/>
							</div>
						</a>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<a href="../corporate_1/index.html" class="c-demo-container">
							<div class="c-demo-thumb  c-thumb-left">
								<img src="{{asset('frontend/assets/base/img/content/quick-sidebar/corporate_1.jpg')}}" class="c-demo-thumb-img"/>
							</div>
						</a>	
					</div>
					<div class="col-md-6">
						<a href="../agency_1/index.html" class="c-demo-container">
							<div class="c-demo-thumb  c-thumb-right">
								<img src="{{asset('frontend/assets/base/img/content/quick-sidebar/corporate_1-onepage.jpg')}}" class="c-demo-thumb-img"/>
							</div>
						</a>	
					</div>
				</div>			
			</div>
		</div>	
		
	</div>
</nav><!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->

	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
		<!-- BEGIN: PAGE CONTENT -->
		<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-9 -->
<section class="c-layout-revo-slider c-layout-revo-slider-9" dir="ltr">
	<div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
		<div class="tp-banner rev_slider" data-version="5.0">
			<ul>
				<!--BEGIN: SLIDE #1 -->
                @foreach($slider as $sliders)
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1000">			
					<img 
						alt="" 
						src="{{url('uploads/slider')}}/{{$sliders->image}}"
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat"
					>	

					<!--BEGIN: MAIN TITLE -->
					<div class="tp-caption customin customout tp-resizeme"  
						data-x="center" 
						data-y="center"
						data-hoffset="[-300,-300, -100, -100]" 
						data-voffset="-120"

						data-speed="300" 
						data-start="500" 
						data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;:s:500;e:Back.easeInOut;" 
						data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" 
						
						data-splitin="none" 
						data-splitout="none" 
						data-elementdelay="0.1" 
						data-endelementdelay="0.1" 
						data-endspeed="600" 

						>
						<h3 class="c-main-title c-font-44 c-font-bold c-font-uppercase c-font-white ">
						{{$sliders->title}}
						</h3>
					</div>
					<!--END -->

					
		 		</li>
		 		<!--END -->
                 @endforeach

				 
			</ul>
		</div>
	</div>
</section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-9 -->

<!-- BEGIN: CONTENT/BARS/BAR-3 -->

<!-- END: CONTENT/BARS/BAR-3 -->

  @yield('content')
   
  
   	
	</div>
	<!-- END: PAGE CONTAINER -->

	<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-7 -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-8 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-4 c-bg-footer-8">
	<div class="c-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 c-footer-4-p-right">
					<div class="c-content-title-1">
						<h3 class="c-font-uppercase c-font-bold c-font-white c-border">JAN<span class="c-theme-font">GO</span></h3>
					</div>
					<p class="c-about">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed elit diam nonummy ad minim veniam quis nostrud 
						exerci et tation diam nisl ut aliquip exit commodo consequat euismod tincidunt ut laoreet dolore magna aluam. 
					</p>
					<div class="c-links">
						<ul class="c-nav">
							<li><a class="c-active c-theme-border c-theme-font" href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Work</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<p class="c-contact">
						25, Lorem Lis Street, Orange C, California, US<br>
						Phone: 800 123 3456<br>
						Fax: 800 123 3456<br>
						Skype: jango.inc
					</p>
					<ul class="c-socials">
						<li><a href="#"><i class="icon-social-twitter"></i></a></li>
						<li><a href="#"><i class="icon-social-facebook"></i></a></li>
						<li><a href="#"><i class="icon-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon-social-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="col-md-6 c-footer-4-p-left">
					<div class="c-feedback">
						<h3 class="c-font-thin">
		                    <input type="text" placeholder="Your Name" class="form-control">
                        	<input type="text" placeholder="Your Email" class="form-control">
		                   	<textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control"></textarea>
		                    <button type="submit" class="btn c-btn-white c-btn-border-2x c-btn-uppercase btn-lg c-btn-bold c-btn-square">Send</button> 
	                   	</form>
	                </div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-8 -->
	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="{{asset('frontend/assets/global/plugins/excanvas.min.js')}}"></script> 
	<![endif]-->
	@if(App::getLocale()=='en')
	<script src="{{asset('frontend/assets/plugins/jquery.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('frontend/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('frontend/assets/plugins/jquery.easing.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('frontend/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript" ></script>
	<script src="{{asset('frontend/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript" ></script>

	<!-- END: CORE PLUGINS -->
     <script src="{{asset('frontend/assets/demos/default/js/scripts/pages/extended-portfolio.j')}}" type="text/javascript"></script>
			<!-- BEGIN: LAYOUT PLUGINS -->
			<script src="{{asset('frontend/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/typed/typed.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/assets/plugins/js-cookie/js.cookie.js')}}" type="text/javascript"></script>
				<!-- END: LAYOUT PLUGINS -->
	
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="{{asset('frontend/assets/base/js/components.js')}}" type="text/javascript"></script>
	<script src="{{asset('frontend/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
	<script src="{{asset('frontend/assets/base/js/app.js')}}" type="text/javascript"></script>

    @else
	<script src="{{asset('rtl/assets/plugins/jquery.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('rtl/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('rtl/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('rtl/assets/plugins/jquery.easing.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('rtl/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript" ></script>
	<script src="{{asset('rtl/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript" ></script>

	<!-- END: CORE PLUGINS -->

			<!-- BEGIN: LAYOUT PLUGINS -->
			<script src="{{asset('rtl/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/typed/typed.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
			<script src="{{asset('rtl/assets/plugins/js-cookie/js.cookie.js')}}" type="text/javascript"></script>
				<!-- END: LAYOUT PLUGINS -->
	
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="{{asset('rtl/assets/base/js/components.js')}}" type="text/javascript"></script>
	<script src="{{asset('rtl/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
	<script src="{{asset('rtl/assets/base/js/app.js')}}" type="text/javascript"></script>
	@endif
	<script>
	<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
	<!-- END: THEME SCRIPTS -->

			<!-- BEGIN: PAGE SCRIPTS -->
	

	<!-- END: THEME SCRIPTS -->

			<!-- BEGIN: PAGE SCRIPTS -->
								<script>
			$(document).ready(function() {
    var slider = $('.c-layout-revo-slider .tp-banner');

    var cont = $('.c-layout-revo-slider .tp-banner-container');

    var api = slider.show().revolution({
        sliderType:"standard",
        sliderLayout:"fullscreen",
        responsiveLevels:[2048,1024,778,320],
        gridwidth: [1240, 1024, 778, 320],
        gridheight: [868, 768, 960, 720],
        delay: 6000,    
        startwidth:1170,
        startheight: App.getViewPort().height,

        navigationType: "hide",
        navigationArrows: "solo",

        touchenabled: "on",

        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            onHoverStop:"on",
            bullets: {
                style:"round",
                enable:true,
                hide_onmobile:false,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                hide_under:0,
                hide_over:9999,
                direction:"horizontal",
                h_align:"right",
                v_align:"bottom",
                space:5,
                h_offset:60,
                v_offset:60,

            },
        },

        spinner: "spinner2",

        fullScreenOffsetContainer: '.c-layout-header',

        shadow: 0,

        hideTimerBar:"on",

        hideThumbsOnMobile: "on",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "on",
        hideArrowsOnMobile: "on",
        hideThumbsUnderResolution: 0
    });
}); //ready	
			</script>
							<!-- END: PAGE SCRIPTS -->
		<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>