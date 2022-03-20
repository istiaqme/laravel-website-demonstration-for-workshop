<!DOCTYPE html> 
<html>
<head>
		
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>@yield('title')</title>	

		<meta name="keywords" content="BMS Bangladesh, Yaskawa Bangladesh, Honeywell Bangladesh, Regin Bangladesh, BAS in Bangladesh, HVAC System in Bangladesh" />
		<meta name="description" content="
            Ixony Engineering Limited is committed in maintaining the highest
            standards of quality at all times, in all it's products and services. It's Quality Management System has been developed to ensure that the requirements for all it's critical activities are clearly identified, understood and agreed by all involved.
        ">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/images/official/IEL-Logo.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('assets/images/official/IEL-Logo.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skins/skin-corporate-3.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('assets/vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
	<body data-plugin-page-transition>
		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-top-0 box-shadow-none">

					<div class="header-top header-top-default border-bottom-0 border-top-0">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											Excellence is our standard.
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
											<li class="social-icons-facebook"><a href="https://www.facebook.com/ixony.info" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCFM-9H3pAq-FT7BRcMLJRUg" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
											<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/ixony-engineering-limited" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container z-index-2">
						<div class="header-row py-2">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo header-logo-sticky-change">
										<a href="{{url('/')}}">
											<img class="header-logo-sticky opacity-0" alt="Ixony Engineering Limited" width="100" height="48" data-sticky-width="89" data-sticky-height="43" data-sticky-top="88" src="{{ asset('assets/images/official/logo-alter.png') }}">
											<img class="header-logo-non-sticky opacity-0" alt="Ixony Engineering Limited" width="100" height="48" src="{{ asset('assets/images/official/IEL-Logo.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-extra-info d-flex align-items-center">
										<li class="d-none d-sm-inline-flex">
											<div class="header-extra-info-icon">
												<i class="far fa-envelope text-color-success text-4 position-relative bottom-2"></i>
											</div>
											<div class="header-extra-info-text">
												<label>SEND US AN EMAIL</label>
												<strong><a href="mailto:info@ixony.com" class="text-decoration-none text-color-hover-primary">
                                                    info@ixony.com</a></strong>
											</div>
										</li>
										<li>
											<div class="header-extra-info-icon">
												<i class="fab fa-whatsapp text-color-success text-4 position-relative bottom-1"></i>
											</div>
											<div class="header-extra-info-text">
												<label>CALL US NOW</label>
												<strong><a href="tel:8801841632703" class="text-decoration-none text-color-hover-primary">+88 01841 632 703</a></strong>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar bg-success" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
						<div class="container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '135px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
											<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
												<nav class="collapse">
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item  {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">
																Home
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item  {{ (request()->is('about')) ? 'active' : '' }}" href="{{ url('/about') }}">
																About
															</a>
														</li>

														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle{{ (request()->is('products')) ? 'active' : '' }}" href="{{ url('/products') }}">
																Products
															</a>
															<ul class="dropdown-menu">
																@foreach ($commonData['productsMenu'] as $serviceKey => $service)
																	@if (count($service->brands) === 0)
																		<li>
																			<a class="dropdown-item" href="{{ url('/products/service') }}/{{ $service->slug }}">{{ $service->title }}</a>
																		</li>
																	
																	@else
																		<li class="dropdown-submenu">
																			<a class="dropdown-item" href="{{ url('/products/service/') }}/{{ $service->slug }}">{{ $service->title }}</a>
																			<ul class="dropdown-menu">
																				@foreach ( $service->brands as $brand)
																					
																					
																					@if (count($brand->brand->categoriesByService($service->id)) === 0)
																						<li><a class="dropdown-item" href="{{ url('/products/service/') }}/{{ $service->slug }}/brand/{{ $brand->brand->slug }}">{{ $brand->brand->title }}</a></li>
																					@else 
																						<li class="dropdown-submenu">
																							<a class="dropdown-item" href="{{ url('/products/service/') }}/{{ $service->slug }}/brand/{{ $brand->brand->slug }}">{{ $brand->brand->title }}</a>
																							<ul class="dropdown-menu">
																								@foreach ($brand->brand->categoriesByService($service->id) as $category )
																									<li><a class="dropdown-item" href="{{ url('/products/service/') }}/{{ $service->slug }}/brand/{{ $brand->brand->slug }}/category/{{ $category->slug }}">{{ $category->title }}</a></li>
																								@endforeach
																								
																				
																							</ul>
																						</li>
																					@endif
																				@endforeach
																				
																				
																				
																			</ul>
																		</li>
																	@endif
																@endforeach
																
																
																
															</ul>
														</li>



														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item  {{ (request()->is('clients')) ? 'active' : '' }}" href="{{ url('/clients') }}">
																Clients
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item  {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ url('/contact') }}">
																Contact
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item  {{ (request()->is('news')) ? 'active' : '' }}" href="{{ url('/news') }}">
																News
															</a>
														</li>

														@if (session('isLoggedIn'))
															<li class="dropdown dropdown-full-color dropdown-light">
																<a class="dropdown-item dropdown-toggle" href="#">
																	Admin Options
																<i class="fas fa-chevron-down"></i></a>
																<ul class="dropdown-menu">
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/services/view') }}">
																			Services
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/brands/view') }}">
																			Brands
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/categories/view') }}">
																			Categories
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/clients/view') }}">
																			Clients
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/videos/view') }}">
																			Videos
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/sliders/view') }}">
																			Sliders
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/testimonials/view') }}">
																			Testimonials
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/news/view') }}">
																			News
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/contacts/messages/view') }}">
																			Contact Form
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/users/view') }}">
																			Users
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="">
																			Welcome! {{ Session::get('name') }}
																		</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="{{ url('/ixony/logout') }}">
																			Logout
																		</a>
																	</li>
																	
																</ul>
															</li>
														@endif

														
														
													</ul>
												</nav>
											</div>
											<button class="btn header-btn-collapse-nav my-2" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
												<i class="fas fa-bars"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>