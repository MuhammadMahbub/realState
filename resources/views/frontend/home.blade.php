@extends('frontend.layouts.master')

@section('title','Baobab Property Services')

@section('content')

    <!--Sliders Section-->
    <div>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-bs-image-src="{{asset('frontend')}}/assets/images/banners/banner1.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-6">
                        <a href="javascript:void(0);" class="typewrite" data-period="2000" data-type='[ "Find Your Best Property" ]'>
                            <span class="wrap"></span>
                        </a>
                        <p>Short description goes here...</p>
                    </div>
                    <div class="row">
                        <form action="{{ route('searchProperty') }}" method="post">
                            @csrf
                            <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                                <div class="search-background bg-transparent">
                                    <div class="form row no-gutters">
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                            <select name="category_id" id="select-Categories12" class="form-control form-select select2 br-tr-md-0 br-br-md-0">
                                                <option value="" selected>All Category</option>
                                                @foreach ($property_categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                            <select name="property_type_id" id="select-Categories13" class="form-control form-select br-md-0 select2">
                                                <option value="" selected>All Types</option>
                                                @foreach ($property_types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                            <select name="location" id="select-Categories14" class="form-control form-select br-md-0 select2">
                                                <option value="" selected>location</option>
                                                @foreach ($property_location as $location)
                                                    <option value="{{ $location->location ?? '' }}">{{ $location->location ?? '' }}</option>    
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="col-xl-3 col-lg-3 col-md-12 mb-0">
                                            <button type="submit" href="" class="br-tl-md-0 br-bl-md-0 btn btn-lg btn-block btn-primary">Search Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </div>
    <!--Sliders Section-->


    <!-- Categories-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Property Categories</h2>
                <p>Short Description goes here...</p>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/appartment.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Apartments for Rent</h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/building.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0"> Apartments for sale</h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/beach-house.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Homes for Rent</h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/house.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Homes for Sale</h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/balcony.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Offices for Rent </h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/balcony.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Offices for Sale </h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/cabin.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Shops for Rent</h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/cabin.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Shops for Sale</h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/balcony.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Warehouses for Rent </h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/balcony.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Warehouses for Sale </h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="javascript:void(0);"></a>
                                    <div class="cat-img">
                                        <img src="{{asset('frontend')}}/assets/images/svgs/realestate/balcony.svg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h4 class="font-weight-semibold mb-0">Plots for Sale </h4>
                                        <span>(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                        
                </div>
            </div>
            
        </div>
        </div>
    </section>
    <!--Categories-->

    <!--Latest Properties for rent-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Properties For Rent</h2>
                <p>Latest Properties description goes here...</p>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/f1.jpg" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Rent </span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Family Houses</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Property Area/Location </p>
                                    <h5 class="font-weight-bold mb-3">Tsh 1,089,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 256 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 3 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 2 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('frontend')}}/assets/images/faces/male/18.jpg" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Wendy	Peake<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">1 day ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/h4.jpg" alt="img" class="cover-image">
                            <div class="tag-text"><span class="bg-danger tag-option">For Rent </span></div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Apartments for Rent</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Property Area/Location </p>
                                    <h5 class="font-weight-bold mb-3">Tsh 600,000 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 150 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 2 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('frontend')}}/assets/images/faces/female/12.jpg" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Ryan Lyman<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">55 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/b1.jpg" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Rent </span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Office for Rent</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Property Area/Location </p>
                                    <h5 class="font-weight-bold mb-3">Tsh 400,000 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 256 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 8 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 4 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 4 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('frontend')}}/assets/images/faces/male/8.jpg" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Joan Hunter<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">2 day ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/v1.jpg" alt="img" class="cover-image">
                            <div class="tag-text"><span class="bg-danger tag-option">For Rent </span></div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Apartments</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Property Area/Location </p>
                                    <h5 class="font-weight-bold mb-3">Tsh 1,000,000 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 700 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 20 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 10 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 10 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('frontend')}}/assets/images/faces/female/19.jpg" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Elizabeth<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">50 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item sold-out">
                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/f3.jpg" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Rent </span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Family House</h4></a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Property Area/Location </p>
                                    <h5 class="font-weight-bold mb-3">Tsh 230,789 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{asset('frontend')}}/assets/images/faces/female/18.jpg" alt="image" class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Boris Nash<i class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">12 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest Ads-->

    <!--Featured Ads-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Properties For Sale</h2>
                <p>Short description goes here..</p>
            </div>
            <div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
                <!-- Wrapper for carousel items -->
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-primary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/b3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Apartments</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> Property Area/Location </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">Ths 890,000 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>February 10 2023 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-purple">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/h3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Family House</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> Property Area/Location </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">Tsh 500,000 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>February 05 2023 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/v4.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">House for Rent</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> Property Area/Location</p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> Parking details 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">Tsh 300,000 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>March 29 2023 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-primary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/f2.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Office For Rent</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> Property Area/Location</p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">Tsh 989,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>January 25 2023 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item sold-out">
                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/j3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text ">
                                    <a href="col-left.html" class="text-dark"><h4 class="">Modern House For Sale</h4></a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> Property Area/Location  </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">Tsh 400,005 <span class="fs-12  font-weight-normal">Per Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>June 19 2022 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Property"><i class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Featured Ads-->

    
    <!--Statistics-->
    <section>
        <div class="about-1 cover-image sptb bg-background2" data-bs-image-src="{{asset('frontend')}}/assets/images/banners/banner5.jpg">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon">
                                    <i class="icon icon-people"></i>
                                </div>
                                <h5>Total Properties</h5>
                                <h2 class="counter mb-0 font-weight-bold">3453</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Total Landlords</h5>
                                <h2 class="counter mb-0 font-weight-bold">0</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-mb-0">
                                <div class="counter-icon text-primary">
                                    <i class="icon icon-docs"></i>
                                </div>
                                <h5>Total Agents</h5>
                                <h2 class="counter mb-0 font-weight-bold">0</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5>Total Tenants</h5>
                                <h2 class="counter font-weight-bold mb-0">0</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->

    <!--Blogs-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>What Makes Us The Preferred Choice ?</h2>
                <p>Description goes here...</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-5">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg  icon-service text-purple about">
                                    <i class="fe fe-pocket text-primary"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Renters & Buyers Trust Us</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-5">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg  icon-service text-purple about">
                                    <i class="fe fe-thumbs-up text-secondary"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Landlords & Sellers Prefer Us</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-5">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg  icon-service text-purple about">
                                    <i class="fe fe-file-text text-success"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2"> 1st Choice for Agents</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="">
                            <div class="service-card text-center">
                                <div class="bg-white icon-bg  icon-service text-purple about">
                                    <i class="fe fe-users text-info"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Expert Guidance</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs-->

    <!--Testimonials-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2 class=" position-relative">What Our Clients Say About Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                            <div class="item text-center">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-xl-8 col-md-12 d-block mx-auto">
                                            <div class="">
                                                <div class="testimonia-img mx-auto mb-3">
                                                    <img src="{{asset('frontend')}}/assets/images/faces/female/11.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                                </div>
                                                <p>
                                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in cillum dolore eu fugiat nulla pariatur.
                                                </p>
                                                <div class="testimonia-data">
                                                    <h4 class="fs-20 mb-1">Heather Bell</h4>
                                                    <div class="rating-stars">
                                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                        <div class="rating-stars-container mb-2">
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="testimonial.html" class="btn btn-primary btn-lg">View all Testimonials</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-xl-8 col-md-12 d-block mx-auto">
                                            <div class="">
                                                <div class="testimonia-img mx-auto mb-3">
                                                    <img src="{{asset('frontend')}}/assets/images/faces/male/42.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                                </div>
                                                <p><i class="fa fa-quote-left"></i> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nor again is there anyone who loves or pursues obtain pain of itself, because laboriosam ex ea commodi consequatur. </p>
                                                <div class="testimonia-data">
                                                    <h4 class="fs-20 mb-1">David Blake</h4>
                                                    <div class="rating-stars">
                                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                        <div class="rating-stars-container mb-2">
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <a href="testimonial.html" class="btn btn-primary btn-lg">View all Testimonials</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-xl-8 col-md-12 d-block mx-auto">
                                            <div class="">
                                                <div class="testimonia-img mx-auto mb-3">
                                                    <img src="{{asset('frontend')}}/assets/images/faces/female/20.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                                </div>
                                                <p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi.</p>
                                                <div class="testimonia-data">
                                                    <h4 class="fs-20 mb-1">Sophie Carr</h4>
                                                    <div class="rating-stars">
                                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                        <div class="rating-stars-container mb-2">
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="rating-star sm">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="testimonial.html" class="btn btn-primary btn-lg">View all Testimonials</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Testimonials-->

    <!--News-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest News</h2>
                <p>Description goes here...</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xl-4">
                    <div class="card mb-lg-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-info">News Category 1</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>July-03-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">News Heading</h4></a>
                            <p>Short description about news goes here... </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('frontend')}}/assets/images/faces/male/5.jpg" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="userprofile.html" class="text-default">Posted by Admin</a>
                                    <small class="d-block text-muted">1 day ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xl-4">
                    <div class="card mb-lg-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-primary">News Category 2</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>July-03-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">News Heading</h4></a>
                            <p>Short description about news goes here... </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('frontend')}}/assets/images/faces/male/5.jpg" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="userprofile.html" class="text-default">Posted by Admin</a>
                                    <small class="d-block text-muted">1 day ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xl-4">
                    <div class="card mb-lg-0">
                        <div class="item7-card-img">
                            <a href="blog-details.html"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
                            <div class="item7-card-text">
                                <span class="badge badge-success">News Category 3</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="javascript:void(0);" class="text-muted"><i class="fa fa-calendar-o text-muted me-2"></i>July-03-2019</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="text-muted"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">News Heading</h4></a>
                            <p>Short description about news goes here... </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="{{asset('frontend')}}/assets/images/faces/male/5.jpg" class="avatar brround avatar-md me-3" alt="avatar-img">
                                <div>
                                    <a href="userprofile.html" class="text-default">Posted by Admin</a>
                                    <small class="d-block text-muted">1 day ago</small>
                                </div>
                                <div class="ms-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    <!--News-->

    <!--Download -->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Download</h2>
                <p>Short description about app download goes here...</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-wrap">
                        <div class="btn-list">
                            <a href="javascript:void(0);" class="btn btn-primary btn-lg mb-sm-0"><i class="fa fa-apple fa-1x me-2"></i> App Store</a>
                            <a href="javascript:void(0);" class="btn btn-secondary btn-lg mb-sm-0"><i class="fa fa-android fa-1x me-2"></i> Google Play</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Download -->
@endsection