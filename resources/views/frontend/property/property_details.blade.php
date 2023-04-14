
@extends('frontend.layouts.master')

@section('title','Baobab Property Details')

@section('content')
<!--Sliders Section-->
<div>
    <div class="cover-image sptb-1 bg-background" data-bs-image-src="../assets/images/banners/banner1.jpg">
        <div class="header-text1 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white text-property">
                            <h1 ><span class="font-weight-bold">16,25,365</span> Properties Available</h1>
                        </div>
                        <div class=" search-background bg-transparent">
                            <div class="form row no-gutters">
                                <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text" placeholder="Search Property">
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 select2-lg col-md-12 mb-0">
                                    <select class="form-control select2-show-search w-100" data-placeholder="Select">
                                        <optgroup label="Categories">
                                            <option>Select</option>
                                            <option value="1">Deluxe Houses</option>
                                            <option value="2">2BHK Homes</option>
                                            <option value="3">Apartments</option>
                                            <option value="4">Modren Houses</option>
                                            <option value="5">Job</option>
                                            <option value="6">Luxury Rooms</option>
                                            <option value="7">Luxury Rooms</option>
                                            <option value="8">Duplex Houses</option>
                                            <option value="9">3BHK Flatss</option>
                                            <option value="10">3BHk Homes</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <a href="javascript:void(0);" class="btn btn-lg btn-block btn-primary br-bl-md-0 br-tl-md-0">Search</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>
</div>
<!--/Sliders Section-->

<!--BreadCrumb-->
<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title"></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);"></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);"></a></li>
                <li class="breadcrumb-item active" aria-current="page">RealEstate</li>
            </ol>
        </div>
    </div>
</div>
<!--/BreadCrumb-->

    <!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">

						<!--Classified Description-->
                        <h4>Property::::</h4>
						<div class="card overflow-hidden">
							<div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Offer</span></div>
							<div class="card-body">
								<div class="item-det mb-4">
									<a href="javascript:void(0);" class="text-dark"><h3 class="">Affordable 2 BHK Flats Available for Rent</h3></a>
									<ul class="d-flex">
										<li class="me-5"><a href="javascript:void(0);" class="icons"><i class="icon icon-briefcase text-muted me-1"></i> RealEstate</a></li>
										<li class="me-5"><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i> Dar es salaam</a></li>
										<li class="me-5"><a href="javascript:void(0);" class="icons"><i class="icon icon-calendar text-muted me-1"></i> 5 hours ago</a></li>
										<li class="me-5"><a href="javascript:void(0);" class="icons"><i class="icon icon-eye text-muted me-1"></i> 765</a></li>
										
									</ul>
								</div>
								<div class="product-slider carousel-slide-1">
									<div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
										data-bs-loop="false" data-bs-thumb="true" data-bs-dots="false">
										<div class="arrow-ribbon2 bg-primary">Tsh 1,200,000</div>
										<div class="carousel-inner slide-show-image" id=full-gallery>
											<div class="carousel-item active"><img src="{{asset('frontend')}}/assets/images/products/products/h1.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/b4.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/h3.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/h4.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/h5.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/h6.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/b1.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/b2.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/b3.jpg" alt="img"> </div>
											<div class="carousel-item"><img src="{{asset('frontend')}}/assets/images/products/products/b4.jpg" alt="img"> </div>
											<div class="thumbcarousel">
												<a class="carousel-control-prev" href="#carouselFade" role="button"
													data-bs-slide="prev">
													<i class="fa fa-angle-left" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#carouselFade" role="button"
													data-bs-slide="next">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<center><h1>Virtual Tour</h1></center>
							</div>
							
							
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Description</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									<p>Luxury Home  For Sale odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
								</div>
								<h4 class="mb-4">Specifications</h4>
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<ul class="list-unstyled widget-spec mb-0">
											<li class="">
												<i class="fa fa-bed text-muted w-5"></i> 2 BedRooms
											</li>
											<li class="">
												<i class="fa fa-bath text-muted w-5"></i> 2 BathRooms
											</li>
											<li class="">
												<i class="fa fa-life-ring text-muted w-5"></i> Unfurnished
											</li>
											<li class="">
												<i class="fa fa-car text-muted w-5" ></i> 2 Car Parking
											</li>
											<li class="">
												<i class="fa fa-globe text-muted w-5"></i> East East face
											</li>
											<li class="mb-xl-0">
												<i class="fa fa-pagelines text-muted w-5"></i> Garden
											</li>
										</ul>
									</div>
									<div class="col-xl-6 col-md-12">
										<ul class="list-unstyled widget-spec mb-0">
											<li class="">
												<i class="fa fa-lock text-muted w-5"></i> Security
											</li>
											<li class="">
												<i class="fa fa-building-o text-muted w-5"></i> Lift
											</li>
											<li class="">
												<i class="fa fa-check text-muted w-5"></i> Swimming fool
											</li>
											<li class="">
												<i class="fa fa-gamepad text-muted w-5"></i> Play Area
											</li>
											<li class="">
												<i class="fa fa-futbol-o text-muted w-5"></i> football Court
											</li>
											<li class="mb-0">
												<i class="fa fa-trophy text-muted w-5"></i> Cricket Court
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="pt-4 pb-4 ps-5 pe-5 border-top border-top">
								<div class="list-id">
									<div class="row">
										<div class="col">
											<a class="mb-0">Property ID : #8256358</a>
										</div>
										<div class="col col-auto">
											Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2019
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="icons">
									<a href="javascript:void(0);" class="btn btn-info icons"><i class="icon icon-share me-1"></i> Share</a>
									<a href="javascript:void(0);" class="btn btn-primary icons"><i class="icon icon-heart  me-1"></i> Likes 678</a>
								</div>
							</div>
						</div>
						<!--/Classified Description-->

						<h3 class="mb-5 mt-4">Related Properties</h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->

							<div class="item">
								<div class="card">
									<div class="arrow-ribbon bg-primary">For Sale</div>
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white">Duplex House</a>
										<h4 class="mb-0">$389</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="#" class="text-dark"><h4 class="font-weight-semibold">House For Sale</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0"> Built Up 1250 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="arrow-ribbon bg-secondary">For Rent</div>
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/v1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white">Luxury Room</a>
										<h4 class=" mb-0">$854</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="#" class="text-dark"><h4 class="font-weight-semibold">Luxury Flat For Sale</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Built Up 650 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/j1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white">3BHK House</a>
										<h4 class=" mb-0">$786</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="#" class="text-dark"><h4 class="font-weight-semibold">Home For Sale</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Built Up 1100 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="arrow-ribbon bg-primary">For Sale</div>
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/f4.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white">2BHK House</a>
										<h4 class="mb-0">Tsh 5000000000</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="r#" class="text-dark"><h4 class="font-weight-semibold">2BHK Flat For Rent</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Built Up 500 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/pel.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white"> 2BHk House</a>
										<h4 class=" mb-0">Tsh 1,200,000</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="#" class="text-dark"><h4 class="font-weight-semibold">Flat For Rent</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Built Up 1000 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="arrow-ribbon bg-secondary">For Rent</div>
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/h5.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white"> Duplex House</a>
										<h4 class="mb-0">$925</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="#" class="text-dark"><h4 class="font-weight-semibold"> Single Flat House For Rent</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Built Up 3450 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/ed2.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white">Luxury Room</a>
										<h4 class=" mb-0">$378</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="#" class="text-dark"><h4 class="font-weight-semibold">House For Sale</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Built Up 900 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="arrow-ribbon bg-primary">For Sale</div>
									<div class="item-card7-imgs">
										<a href="#"></a>
										<img src="{{asset('frontend')}}/assets/images/products/products/j3.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="#" class="text-white">Budget House</a>
										<h4 class=" mb-0">$836</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="#" class="text-dark"><h4 class="font-weight-semibold">2BHK House For Rent</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Dar es salaam</a></li>
												<li><a href="javascript:void(0);" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="javascript:void(0);" class="icons"><i class="icon icon-phone text-muted me-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Built Up 2000 Sq.ft</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/Related Posts-->

						

						
					</div>

					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Posted By</h3>
							</div>
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
									<img src="{{asset('frontend')}}/assets/images/faces/male/25.jpg" class="brround avatar-xxl" alt="user">
									<div class="">
										<a href="userprofile2.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">Arthur Mapunda</h4></a>
										<p class="mb-0">Real Estate Agent</p>
										<span class="text-muted">Member Since November 2008</span>
										<h6 class="mt-2 mb-0"><a href="userprofile2.html" class="btn btn-primary btn-sm">See All Listings/view user</a></h6>
									</div>
								</div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-map-marker me-2 mb-2"></i></span><a href="javascript:void(0);" class="text-body"> 7981 Aspen Ave. Hammonton,  Dar es salaam</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope me-2 mb-2"></i></span><a href="javascript:void(0);" class="text-body"> robert123@gmail.com</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone me-2  mb-2"></i></span><a href="javascript:void(0);" class="text-body"> 0-235-657-24587</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-link me-2 "></i></span><a href="javascript:void(0);" class="text-body">http://spruko.com/</a></h6>
								</div>
								<div class=" item-user-icons mt-4">
									<a href="javascript:void(0);" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="javascript:void(0);" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="javascript:void(0);" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
							<div class="card-footer">
								<div class="text-start">
									<a href="javascript:void(0);" class="btn  btn-success m-1"><i class="fa fa-envelope"></i> Chat</a>
									<a href="javascript:void(0);" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
									<a href="javascript:void(0);" class="btn  btn-info m-1"><i class="fa fa-share"></i> Share</a>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Shares</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-filter-icons text-center">
									<a href="javascript:void(0);" class="facebook-bg"><i class="fa fa-facebook"></i></a>
									<a href="javascript:void(0);" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="javascript:void(0);" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
									<a href="javascript:void(0);" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Latest Listing</h3>
							</div>
							<div class="card-body pb-3">
								<div class="rated-products">
									<ul class="vertical-scroll">
										<li class="item">
											<div class="media m-0 mt-0 p-5">
												<img class="me-4" src="{{asset('frontend')}}/assets/images/products/toys.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Apartment</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$17 - $29</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class="me-4" src="{{asset('frontend')}}/assets/images/products/1.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Modren Apartment</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$22 - $45</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class=" me-4" src="{{asset('frontend')}}/assets/images/products/4.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">3BHK Flat</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-half-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$35 - $72</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class=" me-4" src="{{asset('frontend')}}/assets/images/products/6.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">2BHK Flat</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-half-o text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$12 - $21</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media  mb-0 p-5 mt-0">
												<img class=" me-4" src="{{asset('frontend')}}/assets/images/products/8.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Luxury House</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$89 - $97</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Latest Properties</h3>
							</div>
							<div class="card-body pb-3">
								<ul class="vertical-scroll">
									<li class="news-item">
										<table>
											<tr>
												<td><img src="{{asset('frontend')}}/assets/images/products/1.png" alt="img" class="w-8 border"/></td>
												<td class="ps-4"><h5 class="mb-1 ">Best New Model Houses</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="{{asset('frontend')}}/assets/images/products/2.png" alt="img" class="w-8 border"/></td>
												<td class="ps-4"><h5 class="mb-1 ">Trending New Model Houses</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="{{asset('frontend')}}/assets/images/products/3.png" alt="img" class="w-8 border" /></td>
												<td class="ps-4"><h5 class="mb-1 ">Best New Model Houses</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="{{asset('frontend')}}/assets/images/products/4.png" alt="img" class="w-8 border" /></td>
												<td class="ps-4"><h5 class="mb-1 ">Trending New Model Houses</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="{{asset('frontend')}}/assets/images/products/5.png" alt="img" class="w-8 border" /></td>
												<td class="ps-4"><h5 class="mb-1 ">Best New Model Houses</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="{{asset('frontend')}}/assets/images/products/6.png" alt="img" class="w-8 border" /></td>
												<td class="ps-4"><h5 class="mb-1 ">Duplex House</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="{{asset('frontend')}}/assets/images/products/7.png" alt="img" class="w-8 border" /></td>
												<td class="ps-4"><h5 class="mb-1 ">Modren Flats</h5><a href="javascript:void(0);" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>

        @push('modals')
            <!-- Message Modal -->
		<div class="modal fade" id="contact" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="examplecontactLongTitle">Send Message</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<form action="{{ route('message_store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="property_id" value="{{ $property->id }}">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="contact-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-0">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Send</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>

		<!--Comment Modal -->
		<div class="modal fade" id="Comment" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleCommentLongTitle">Leave a Comment</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" class="form-control" id="Comment-name" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="Comment-email" placeholder="Email Address">
						</div>
						<div class="form-group mb-0">
							<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-success">Send</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Report Modal -->
		<div class="modal fade" id="report" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="examplereportLongTitle">Report Abuse</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" class="form-control" id="report-name" placeholder="Enter url">
						</div>
						<div class="form-group">
							<select name="country" id="select-countries2" class="form-control form-select select2">
								<option value="1" selected>Categories</option>
								<option value="2">RealEstatem</option>
								<option value="3">Identity Theft</option>
								<option value="4">Online Shopping Fraud</option>
								<option value="5">Service Providers</option>
								<option value="6">Phishing</option>
								<option value="7">Spyware</option>
							</select>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="report-email" placeholder="Email Address">
						</div>
						<div class="form-group mb-0">
							<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-success">Submit</button>
					</div>
				</div>
			</div>
		</div>
        @endpush
@endsection