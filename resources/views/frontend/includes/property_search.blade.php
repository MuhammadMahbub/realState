
<h4>
    Property:::
    @foreach ($properties as $item)
        <li>{{ $item->price }}--{{ $item->created_at->format('d m') }}</li>    
    @endforeach
</h4>

<div class="tab-pane active" id="tab-11">
    <div class="card overflow-hidden">
        <div class="d-md-flex">
            <div class="item-card9-img">
                <div class="arrow-ribbon bg-primary">Tsh 1,500,000</div>
                <div class="item-card9-imgs">
                    <a href="#"></a>
                    <img src="{{asset('frontend')}}/assets/images/products/h4.png" alt="img" class="cover-image">
                </div>
                <div class="item-card9-icons">
                    @php
                        $like_exist = App\Models\Like::where('property_id', 11)->where('user_id',Auth::id())->first();
                        $like_count = App\Models\Like::where('property_id', 11)->count();
                        $rate_count = App\Models\Rating::where('property_id', 11)->count();
                        $rate_exist = App\Models\Rating::where('property_id', 11)->where('user_id', Auth::id())->first();
                        $total_rating = App\Models\Rating::where('property_id', 11)->sum('rate_count');
                        $avg_rate = ($total_rating/$rate_count);
                    @endphp
                    <a href="javascript:void(0);" class="like_btn item-card9-icons1 wishlist" property-id="11" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist">
                        <span class="like_icon__11">
                            @if($like_exist)
                            <i class="fa fa fa-heart text-danger"></i>
                            @else
                            <i class="fa fa fa-heart-o"></i>
                            @endif
                        </span>
                        {{-- <i class="fa fa fa-heart-o" ></i></a> --}}
                    <a href="javascript:void(0);" class="likeCount__11 item-card9-icons1 wishlist" property-id="11" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> {{ $like_count }} </a>
                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                </div>
                <div class="item-tags">
                    <div class="bg-success tag-option">For Sale </div>
                </div>
                <div class="item-trans-rating">
                    <div class="rating-stars block">
                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="{{ $rate_exist->rate_count + 1 ?? '' }}">
                        <div class="rating-stars-container">
                            <input type="hidden" name="property_id" class="property_id" value="11">
                            <div class="rating-star sm">
                                <i class="rateProperty fa fa-star" rate-value="1"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="rateProperty fa fa-star" rate-value="2"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="rateProperty fa fa-star" rate-value="3"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="rateProperty fa fa-star" rate-value="4"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="rateProperty fa fa-star" rate-value="5"></i>
                            </div>
                            <div class="rating-star sm ">
                                <span class="ratePercent__11">{{ round($avg_rate, 1) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 mb-0">
                <div class="card-body ">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Villa</a>
                        <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 2 days ago</span></a>
                        <a href="#" class="text-dark"><h4 class="font-weight-bold mt-1">2BHK flat </h4></a>
                        <div class="mb-1">
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-arrows-alt text-muted me-1"></i> 950 Sqft</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                            <a href="javascript:void(0);" class="icons  text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 2 Car</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-4 pb-4">
                    <div class="item-card9-footer d-flex">
                        <div class="item-card9-cost">
                            <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Owner</span></a>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="d-md-flex">
            <div class="item-card9-img">
                <div class="arrow-ribbon bg-secondary">$987.88</div>
                <div class="item-card9-imgs">
                    <a href="#"></a>
                    <div id="carousel-controls" class="carousel slide property-slide" data-bs-ride="carousel" data-interval="false">
                        <div class="carousel-inner br-0">
                            <div class="carousel-item active">
                                <img src="{{asset('frontend')}}/assets/images/products/j2.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('frontend')}}/assets/images/products/f2.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('frontend')}}/assets/images/products/f4.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('frontend')}}/assets/images/products/b3.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('frontend')}}/assets/images/products/e1.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="item-card9-icons">
                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                </div>
                <div class="item-tags">
                    <div class="bg-success tag-option">For Sale </div>
                </div>
                <div class="item-trans-rating">
                    <div class="rating-stars block">
                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="2">
                        <div class="rating-stars-container">
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 mb-0">
                <div class="card-body ">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Deluxe House</a>
                        <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 15 mins ago</span></a>
                        <a href="#" class="text-dark"><h4 class="font-weight-bold mt-1">Luxury Home For Sale</h4></a>
                        <div class="mb-1">
                            <a href="javascript:void(0);" class="me-4 icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 950 Sqft</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 2 Car</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-4 pb-4">
                    <div class="item-card9-footer d-flex">
                        <div class="item-card9-cost">
                            <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Agent</span></a>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sold-out1">
        <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
        <div class="card overflow-hidden">
            <div class="d-md-flex">
                <div class="item-card9-img">
                    <div class="arrow-ribbon bg-success">$567</div>
                    <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="{{asset('frontend')}}/assets/images/products/pe1.png" alt="img" class="cover-image">
                    </div>
                    <div class="item-card9-icons">
                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                    </div>
                    <div class="item-tags">
                        <div class="bg-danger tag-option">For Buy </div>
                    </div>
                    <div class="item-trans-rating">
                        <div class="rating-stars block">
                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                            <div class="rating-stars-container">
                                <div class="rating-star sm  ">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-star sm  ">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-star sm  ">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-star sm ">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rating-star sm ">
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-0">
                    <div class="card-body ">
                        <div class="item-card9">
                            <a href="#" class="text-muted me-4"><i class="fa fa-tag me-1"></i> 3BHK Flats</a>
                            <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 1 day ago</span></a>
                            <a href="#" class="text-dark"><h4 class="font-weight-bold mt-1">Apartment For Rent </h4></a>
                            <div class="mb-1">
                                <a href="javascript:void(0);" class="me-4 icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 400 Sqft</a>
                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 3 Beds</a>
                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                                <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 1 Car</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pt-4 pb-4">
                        <div class="item-card9-footer d-flex">
                            <div class="item-card9-cost">
                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                                <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Owner</span></a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="d-md-flex">
            <div class="item-card9-img">
                <div class="arrow-ribbon bg-pink">$567</div>
                <div class="item-card9-imgs">
                    <a href="#"></a>
                    <img src="{{asset('frontend')}}/assets/images/products/b3.png" alt="img" class="cover-image">
                </div>
                <div class="item-card9-icons">
                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                </div>
                <div class="item-tags">
                    <div class="bg-success tag-option">For Sale </div>
                    <div class="bg-pink tag-option">Hot </div>
                </div>
                <div class="item-trans-rating">
                    <div class="rating-stars block">
                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                        <div class="rating-stars-container">
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 mb-0">
                <div class="card-body ">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Office</a>
                        <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 35 mins ago</span></a>
                        <a href="#" class="text-dark"><h4 class="font-weight-bold mt-1"> Office rooms.... </h4></a>
                        <div class="mb-1">
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-arrows-alt text-muted me-1"></i> 1500 Sqft</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 5 Beds</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 2 Car</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-4 pb-4">
                    <div class="item-card9-footer d-flex">
                        <div class="item-card9-cost">
                            <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Agent</span></a>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="d-md-flex">
            <div class="item-card9-img">
                <div class="arrow-ribbon bg-primary">$839</div>
                <div class="item-card9-imgs">
                    <a href="#"></a>
                    <img src="{{asset('frontend')}}/assets/images/products/f4.png" alt="img" class="cover-image">
                </div>
                <div class="item-card9-icons">
                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                </div>
                <div class="item-tags">
                    <div class="bg-info tag-option">For Rent </div>
                </div>
                <div class="item-trans-rating">
                    <div class="rating-stars block">
                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="1">
                        <div class="rating-stars-container">
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 mb-0">
                <div class="card-body ">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Luxury rooms</a>
                        <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 5 days ago</span></a>
                        <a href="#" class="text-dark"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                        <div class="mb-1">
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 2 Beds</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 2 Bath</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 1 Car</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-4 pb-4">
                    <div class="item-card9-footer d-flex">
                        <div class="item-card9-cost">
                            <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Owner</span></a>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="d-md-flex">
            <div class="item-card9-img">
                <div class="arrow-ribbon bg-secondary">$289</div>
                <div class="item-card9-imgs">
                    <a href="#"></a>
                    <img src="{{asset('frontend')}}/assets/images/products/v1.png" alt="img" class="cover-image">
                </div>
                <div class="item-card9-icons">
                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                </div>
                <div class="item-tags">
                    <div class="bg-success tag-option">For Sale </div>
                    <div class="bg-pink tag-option">New </div>
                </div>
                <div class="item-trans-rating">
                    <div class="rating-stars block">
                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="1">
                        <div class="rating-stars-container">
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm  ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-star sm ">
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 mb-0">
                <div class="card-body ">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-4"><i class="fa fa-tag me-1"></i> Apartments</a>
                        <a href="javascript:void(0);" class=""><span class="text-muted"><i class="fa fa-calendar-o  me-1"></i> 3 days ago</span></a>
                        <a href="#" class="text-dark"><h4 class="font-weight-bold mt-1">Apartment For Rent </h4></a>
                        <div class="mb-1">
                            <a href="javascript:void(0);" class="me-4 icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 2500 Sqft</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bed text-muted me-1"></i> 20 Beds</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-bath text-muted me-1"></i> 15 Bath</a>
                            <a href="javascript:void(0);" class="icons text-muted me-4"><i class="fa fa-car text-muted me-1"></i> 10 Car</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-4 pb-4">
                    <div class="item-card9-footer d-flex">
                        <div class="item-card9-cost">
                            <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            <a href="javascript:void(0);" class="me-0"><span class=""><i class="fa fa-user text-muted me-1"></i> Agent</span></a>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab-pane" id="tab-12">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="item-card9-img">
                    <div class="arrow-ribbon bg-primary">$263.99</div>
                    <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="{{asset('frontend')}}/assets/images/products/h4.png" alt="img" class="cover-image">
                    </div>
                    <div class="item-card9-icons">
                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                    </div>
                    <div class="item-tags">
                        <div class="bg-success tag-option">For Sale </div>
                        <div class="bg-pink tag-option">Open </div>
                    </div>
                    <div class="item-trans-rating">
                        <div class="rating-stars block">
                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                            <div class="rating-stars-container">
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
                    </div>
                </div>
                <div class="card-body">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Villa</a>
                        <a href="#" class="text-muted"><i class="fa fa-user me-1"></i> Owner</a>
                        <a href="#" class="text-dark mt-2 nameSearch"><h4 class="font-weight-bold mt-1">2BHK flat </h4></a>
                        <ul class="item-card2-list">
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 700 Sqft</a></li>
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 5 Beds</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 4 Bath</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 2 Car</a></li>
                        </ul>
                        <p class="mb-0">Ut enim ad minima veniamq nostrum exerci </p>
                    </div>
                </div>
                <div class="item-card-btn-hover">
                    <div class="card-footer">
                        <div class="item-card9-footer d-flex">
                            <div class="item-card9-cost">
                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 2 days ago</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card-btn">
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="arrow-ribbon bg-secondary">$987.88</div>
                <div class="item-card9-img">
                    <div class="item-card9-imgs">
                        <a href="#"></a>
                        <div id="carousel-controls1" class="carousel slide property-slide" data-bs-ride="carousel" data-interval="false">
                            <div class="carousel-inner br-0">
                                <div class="carousel-item active">
                                    <img src="{{asset('frontend')}}/assets/images/products/j2.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('frontend')}}/assets/images/products/f2.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('frontend')}}/assets/images/products/f4.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('frontend')}}/assets/images/products/b3.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('frontend')}}/assets/images/products/e1.png" alt="img" class="cover-image d-block w-100" data-holder-rendered="true">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-controls1" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-controls1" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="item-card9-icons">
                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                    </div>
                    <div class="item-tags">
                        <div class="bg-success tag-option">For Sale </div>
                    </div>
                    <div class="item-trans-rating">
                        <div class="rating-stars block">
                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="2">
                            <div class="rating-stars-container">
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
                    </div>
                </div>
                <div class="card-body">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Deluxe House</a>
                        <a href="#" class="text-muted"><i class="fa fa-user me-1"></i> Agent</a>
                        <a href="#" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Luxury Home For Sale</h4></a>
                        <ul class="item-card2-list">
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 950 Sqft</a></li>
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 2 Car</a></li>
                        </ul>
                        <p class="mb-0">Ut enim ad minima veniamq nostrum exerci ullam</p>
                    </div>
                </div>
                <div class="item-card-btn-hover">
                    <div class="card-footer">
                        <div class="item-card9-footer d-flex">
                            <div class="item-card9-cost">
                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 15 mins ago</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card-btn">
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xl-4">
            <div class="sold-out1">
                <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span></div>
                <div class="card overflow-hidden">
                    <div class="arrow-ribbon bg-success">$567</div>
                    <div class="item-card9-img">
                        <div class="item-card9-imgs">
                            <a href="#"></a>
                            <img src="{{asset('frontend')}}/assets/images/products/pe1.png" alt="img" class="cover-image">
                        </div>
                        <div class="item-card9-icons">
                            <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                            <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                        </div>
                        <div class="item-tags">
                            <div class="bg-danger tag-option">For Buy </div>
                        </div>
                        <div class="item-trans-rating">
                            <div class="rating-stars block">
                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
                                <div class="rating-stars-container">
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
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="item-card9">
                            <a href="#" class="text-muted me-3"><i class="fa fa-tag me-1"></i> 3BHK Flats</a>
                            <a href="#" class="text-muted"><i class="fa fa-user me-1"></i> Owner</a>
                            <a href="#" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                            <ul class="item-card2-list">
                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 400 Sqft</a></li>
                                <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 3 Beds</a></li>
                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                            </ul>
                            <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                        </div>
                    </div>
                    <div class="item-card-btn-hover">
                        <div class="card-footer">
                            <div class="item-card9-footer d-flex">
                                <div class="item-card9-cost">
                                    <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 1 days ago</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-card-btn">
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="arrow-ribbon bg-pink">$567</div>
                <div class="item-card9-img">
                    <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="{{asset('frontend')}}/assets/images/products/b3.png" alt="img" class="cover-image">
                    </div>
                    <div class="item-card9-icons">
                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                    </div>
                    <div class="item-tags">
                        <div class="bg-success tag-option">For Sale</div>
                        <div class="bg-pink tag-option">Hot </div>
                    </div>
                    <div class="item-trans-rating">
                        <div class="rating-stars block">
                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                            <div class="rating-stars-container">
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
                    </div>
                </div>
                <div class="card-body">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Office</a>
                        <a href="#" class="text-muted "><i class="fa fa-user me-1"></i> Owner</a>
                        <a href="#" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Office rooms..</h4></a>
                        <ul class="item-card2-list">
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 1500 Sqft</a></li>
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 5 Beds</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 2 Car</a></li>
                        </ul>
                        <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                    </div>
                </div>
                <div class="item-card-btn-hover">
                    <div class="card-footer">
                        <div class="item-card9-footer d-flex">
                            <div class="item-card9-cost">
                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 35 mins ago</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card-btn">
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="arrow-ribbon bg-primary">$839</div>
                <div class="item-card9-img">
                    <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="{{asset('frontend')}}/assets/images/products/f4.png" alt="img" class="cover-image">
                    </div>
                    <div class="item-card9-icons">
                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                    </div>
                    <div class="item-tags">
                        <div class="bg-info tag-option">For Rent </div>
                    </div>
                    <div class="item-trans-rating">
                        <div class="rating-stars block">
                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="1">
                            <div class="rating-stars-container">
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
                    </div>
                </div>
                <div class="card-body">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Luxury rooms</a>
                        <a href="#" class="text-muted "><i class="fa fa-user me-1"></i> Agent</a>
                        <a href="#" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                        <ul class="item-card2-list">
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 300 Sqft</a></li>
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 2 Beds</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 2 Bath</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                        </ul>
                        <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                    </div>
                </div>
                <div class="item-card-btn-hover">
                    <div class="card-footer">
                        <div class="item-card9-footer d-flex">
                            <div class="item-card9-cost">
                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 5 days ago</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card-btn">
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="arrow-ribbon bg-secondary">$289</div>
                <div class="item-card9-img">
                    <div class="item-card9-imgs">
                        <a href="#"></a>
                        <img src="{{asset('frontend')}}/assets/images/products/v1.png" alt="img" class="cover-image">
                    </div>
                    <div class="item-card9-icons">
                        <a href="javascript:void(0);" class="item-card9-icons1 wishlist active" data-bs-toggle="tooltip" data-bs-placement="top" title="wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"> <i class="icon icon-share" ></i></a>
                    </div>
                    <div class="item-tags">
                        <div class="bg-success tag-option">For Sale </div>
                        <div class="bg-pink tag-option">New </div>
                    </div>
                    <div class="item-trans-rating">
                        <div class="rating-stars block">
                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="1">
                            <div class="rating-stars-container">
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
                    </div>
                </div>
                <div class="card-body">
                    <div class="item-card9">
                        <a href="#" class="text-muted me-3"><i class="fa fa-tag me-1"></i> Apartments</a>
                        <a href="#" class="text-muted"><i class="fa fa-user me-1"></i> Agent</a>
                        <a href="#" class="text-dark mt-2"><h4 class="font-weight-bold mt-1">Apartment For Rent</h4></a>
                        <ul class="item-card2-list">
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-arrows-alt text-muted me-1"></i> 2500 Sqft</a></li>
                            <li><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bed text-muted me-1"></i> 20 Beds</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-bath text-muted me-1"></i> 15 Bath</a></li>
                            <li class="mb-3"><a href="javascript:void(0);" class="icons text-muted"><i class="fa fa-car text-muted me-1"></i> 10 Car</a></li>
                        </ul>
                        <p class="mb-0">Ut enim ad minima veniamq nostrum exerci</p>
                    </div>
                </div>
                <div class="item-card-btn-hover">
                    <div class="card-footer">
                        <div class="item-card9-footer d-flex">
                            <div class="item-card9-cost">
                                <a href="javascript:void(0);" class="me-4"><span class=""><i class="fa fa-map-marker text-muted me-1"></i> Dar es salaam</span></a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class=""><span class=""><i class="fa fa-calendar-o text-muted me-1"></i> 3 days ago</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-card-btn">
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact">Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @section('scripts') --}}
    
{{-- @endsection --}}