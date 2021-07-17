
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-2 -->
<!-- BEGIN: HEADER 2 -->
<header class="c-layout-header c-layout-header-6" data-minimize-offset="120">
	<div class="c-topbar">
    
		<div class="container">
		<nav class="c-top-menu">
				<ul class="c-links c-theme-ul">
				
					<a class="dropdown-item" href="{{route('changLang','en')}}"> @lang('lang.english')</a>
                      <a class="dropdown-item" href="{{route('changLang','fa')}}"> @lang('lang.dari')</a>
				
					<li class="c-divider"></li>
					
					<li ><a href="javascript:;" data-toggle="modal" data-target="#login-form" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Sign In</a></li>
				</ul>
				<ul class="c-ext hide c-theme-ul">
					
					
					<li class="c-search hide">
						<!-- BEGIN: QUICK SEARCH -->
						<form action="#">
							<input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
							<i class="fa fa-search"></i>
						</form>
						<!-- END: QUICK SEARCH -->	
					</li>
				</ul>
			</nav>
          
			<div class="c-brand">
       		  
				<ul class="c-icons c-theme-ul" style="margin-top:-30px">
                    <li>  <img src="{{asset('uploads/Afghan dina1.png')}}" style="height:50px" /> </li>
					<li><a href="https://www.youtube.com/channel/UCFMiwcVEKYroRZ416It59tQ"><i class="icon-social-youtube"></i></a></li>
					<li><a href="https://www.facebook.com/Dinahandicraft/" target="_"><i class="icon-social-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/accounts/edit/" target="_"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i> 0785878794</a></li>
				</ul>	
				<button class="c-topbar-toggler" type="button">
					<i class="fa fa-ellipsis-v"></i>
				</button>
				<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
					<span class="c-line"></span>
					<span class="c-line"></span>
					<span class="c-line"></span>
				</button>
				<button class="c-search-toggler" type="button">
					<i class="fa fa-search"></i>
				</button>
			</div>	
            			
		</div>
	</div>
	<div class="c-navbar">
		<div class="container">
			<!-- BEGIN: BRAND -->
			<div class="c-navbar-wrapper clearfix">				
				<!-- END: BRAND -->				
				<!-- BEGIN: QUICK SEARCH -->
				<form class="c-quick-search" action="#">
					<input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
					<span class="c-theme-link">&times;</span>
				</form>
				<!-- END: QUICK SEARCH -->	
				<!-- BEGIN: HOR NAV -->
				<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
<!-- BEGIN: MEGA MENU -->
<!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
	<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
	<ul class="nav navbar-nav c-theme-nav"> 
		<li class="">
		<a href="{{route('homepage')}}" class="c-link dropdown-toggle">@lang('lang.home')<span class="c-arrow c-toggler"></span></a>

		</li>
		<li class="">
		<a href="{{route('aboutUs')}}" class="c-link dropdown-toggle">@lang('lang.about')<span class="c-arrow c-toggler"></span></a>

		</li>
		<li class="">
		<a href="{{route('allServices')}}" class="c-link dropdown-toggle">@lang('lang.services')<span class="c-arrow c-toggler"></span></a>
			<ul class="dropdown-menu c-menu-type-classic c-pull-left">
					@foreach($service as $service)
					<li class="dropdown-submenu">
					<a href="/service_details/{{$service->id}}">{{$service->title}}<span class="c-arrow c-toggler"></span></a>
					</li>
					@endforeach
			</ul>
		</li>
		<li class="">
		<a href="" class="c-link dropdown-toggle">@lang('lang.core')<span class="c-arrow c-toggler"></span></a>

			
		</li>
		<li class="">
		<a href="" class="c-link dropdown-toggle">@lang('lang.store_value')<span class="c-arrow c-toggler"></span></a>

			
		</li>

		<li class="">
		<a href="" class="c-link dropdown-toggle">@lang('lang.project')<span class="c-arrow c-toggler"></span></a>

			
		</li>
		<li class="">
		<a href="" class="c-link dropdown-toggle">@lang('lang.contact')<span class="c-arrow c-toggler"></span></a>

			
		</li>
    </ul>
</nav>
</div>
</div>
</header>