<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="" >
		<meta content="Baobab Property Services" name="author">
		<meta name="keywords" content="#"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>@yield('title')</title>

		<!-- Bootstrap Css -->
		<link id="style" href="{{asset('frontend')}}/assets/plugins/bootstrap-5/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet" />

		<!-- Font-awesome  Css -->
		<link href="{{asset('frontend')}}/assets/css/icons.css" rel="stylesheet"/>

		<!--Select2 Plugin -->
		<link href="{{asset('frontend')}}/assets/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- Owl Theme css-->
		<link href="{{asset('frontend')}}/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="{{asset('frontend')}}/assets/plugins/pscrollbar/perfect-scrollbar.css" rel="stylesheet" />

	</head>
	<body class="main-body">

		<!--Loader-->
		<div id="global-loader">
			<img src="{{asset('frontend')}}/assets/images/loader.svg" class="loader-img" alt="">
		</div>

		<!--Topbar-->
		<div class="header-main">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
							<div class="top-bar-left d-flex">
								<div class="clearfix">
									<ul class="socials">
										<li>
											<a class="social-icon text-dark" href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
										</li>
										
									</ul>
								</div>
								<div class="clearfix">
									<ul class="contact">
										<li class="me-5 d-lg-none">
											<a href="javascript:void(0);" class="callnumber text-dark"><span><i class="fa fa-phone me-1"></i>: +255765272081</span></a>
										</li>
										<li class="select-country me-5">
											<select class="form-control select2-flag-search" data-placeholder="Select Country">
												<option value="TZ">Tanzania</option>
												<option value="AO">Angola</option>
												<option value="BW">Botswana</option>
												<option value="BI">Burundi</option>
												<option value="">Comoros </option>
												<option value="CO">Congo (DRC)</option>
												<option value="SZ">Eswatini</option>
												<option value="ETH">Ethiopia</option>
												<option value="KE">Kenya</option>
												<option value="LS">Lesotho</option>
												<option value="MW">Malawi</option>
												<option value="">Mautius</option>
												<option value="MZ">Mozambique</option>
												<option value="NA">Namibia</option>
												<option value="RW">Rwanda</option>
												<option value="">Seychelles</option>
												<option value="">South Africa</option>
												<option value="SD">South Sudan</option>
												<option value="UG">Uganda</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>	
											</select>
										</li>
										<li class="dropdown me-5">
											<a href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown"><span> Language <i class="fa fa-caret-down text-muted"></i></span> </a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
												<a href="javascript:void(0);" class="dropdown-item" >
													English
												</a>
												<a class="dropdown-item" href="javascript:void(0);">
													Swahili
												</a>
												<a class="dropdown-item" href="javascript:void(0);">
													French
												</a>
												<a href="javascript:void(0);" class="dropdown-item" >
													Portuguese  
												</a>
												<a href="javascript:void(0);" class="dropdown-item" >
													Amharic
												</a>
											</div>
										</li>
										<li class="dropdown">
											<a href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown"><span>Currency <i class="fa fa-caret-down text-muted"></i></span></a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
												<a href="javascript:void(0);" class="dropdown-item" >
													TSH
												</a>
												<a class="dropdown-item" href="javascript:void(0);">
													EUR
												</a>
												<a class="dropdown-item" href="javascript:void(0);">
													INR
												</a>
												<a href="javascript:void(0);" class="dropdown-item" >
													GBP
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
							<div class="top-bar-right">
								<ul class="custom">
									<li>
										<a href="{{ route('register') }}" class="text-dark"><i class="fa fa-user me-1"></i> <span>Register</span></a>
									</li>
									<li>
										<a href="{{ route('login') }}" class="text-dark"><i class="fa fa-sign-in me-1"></i> <span>Login</span></a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Duplex Houses Header -->
			<div class="sticky">
				<div class="horizontal-header clearfix ">
					<div class="container">
						<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
						<span class="smllogo">
							<a href="index.html">
								<img src="{{asset('frontend')}}/assets/images/brand/logo.png" class="mobile-light-logo" width="120" alt=""/>
								<img src="{{asset('frontend')}}/assets/images/brand/logo1.png" class="mobile-dark-logo" width="120" alt=""/>
							</a>
						</span>
						<a href="tel:+255765272081" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<!-- /Duplex Houses Header -->

            <div class="horizontal-main bg-dark-transparent clearfix">
				<div class="horizontal-mainwrapper container clearfix">
					<div class="desktoplogo">
						<a href="index.html"><img src="{{asset('frontend')}}/assets/images/brand/logo1.png" alt=""></a>
					</div>
					<div class="desktoplogo-1">
						<a href="index.html"><img src="{{asset('frontend')}}/assets/images/brand/logo1.png" alt=""></a>
					</div>
					<!--Nav-->
					<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="index.html" class="active">Home</a></li>
							<li aria-haspopup="true"><a href="real-estate-agent.html">Find Real Estate Agent</a></li>
							<li aria-haspopup="true"><a href="{{ route('register') }}">Register</a></li>
							<li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
								<span><a class="btn btn-secondary" href="register.html">Add Listing</a></span>
							</li>
						</ul>
						<ul class="mb-0">
							<li aria-haspopup="true" class="mt-3 d-none d-lg-block top-postbtn">
								<span><a class="btn btn-secondary ad-post " href="register.html">Add Listing</a></span>
							</li>
						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>