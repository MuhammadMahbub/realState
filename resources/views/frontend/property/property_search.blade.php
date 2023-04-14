@extends('frontend.layouts.master')

@section('title','Baobab Property Services')

@section('content')

<!--Sliders Section-->
<div>
    <div class=" cover-image sptb-1 bg-background" data-bs-image-src="../assets/images/banners/banner1.jpg">
        <div class="header-text1 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white text-property">
                            <h1 ><span class="font-weight-bold">16,25,365</span> Properties Available</h1>
                        </div>
                        <div class="search-background bg-transparent">
                            <div class="form row no-gutters ">
                                <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Find  Property">
                                </div>
                                <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Enter Location">
                                    <span><i class="fa fa-map-marker location-gps me-1"></i> </span>										</div>
                                <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                    <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                        <optgroup label="Categories">
                                            <option>Select</option>
                                            <option value="2">Apartments</option>
                                            <option value="3">Condominium</option>
                                            <option value="4">Single-Family Home</option>
                                            <option value="5">Multi-Family Home</option>
                                            <option value="6">Office Space </option>
                                            <option value="7">Plots for Sale</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <a href="javascript:void(0);" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
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


<!--Add listing-->
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12">
                <!--Add lists-->
                <div class=" mb-lg-0">
                    <div class="">
                        <div class="item2-gl ">
                            <div class=" mb-0">
                                <div class="">
                                    <div class="p-5 bg-white item2-gl-nav d-flex border br-5">
                                        <h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
                                        <ul class="nav item2-gl-menu ms-auto mt-2">
                                            <li class=""><a href="#tab-11" class="active show" data-bs-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                            <li><a href="#tab-12" data-bs-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                        <div class="d-flex">
                                            <label class="me-2 mt-1 mb-sm-1 pt-2">Sort By:</label>
                                            <select id="filterProperty" name="item" class="form-control select-sm w-75 select2">
                                                <option value="1">Latest</option>
                                                <option value="2">Oldest</option>
                                                <option value="lowToHigh">Price:Low-to-High</option>
                                                <option value="highToLow">Price:Hight-to-Low</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="propertySearch">
                                
                                @include('frontend.includes.property_search')

                                
                            </div>
                        </div>
                        <div class="center-block text-center">
                            <ul class="pagination mb-5 mb-lg-0">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Add lists-->
            </div>

            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input  type="text" class="table_search form-control br-tl-3  br-bl-3" placeholder="Search">
                                <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                                    Search
                                </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <div class="card-body">
                        <div class="" id="container">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Apartments<span class="label label-secondary float-end">14</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Condominium<span class="label label-secondary float-end">0</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Single-Family Home<span class="label label-secondary float-end">0</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Multi-Family Home<span class="label label-secondary float-end">0</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Office Space<span class="label label-secondary float-end">0</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Plots for Sale<span class="label label-secondary float-end">0</span></span>
                                    </span>
                                </label>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-header border-top">
                        <h3 class="card-title">Property Status</h3>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                <span class="custom-control-label">
                                    For Rent
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                <span class="custom-control-label">
                                    For Sale
                                </span>
                            </label>
                            
                        </div>
                    </div>
                    <div class="card-header border-top">
                        <h3 class="card-title">Posted By</h3>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                <span class="custom-control-label">
                                    Owner
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                <span class="custom-control-label">
                                    Agent
                                </span>
                            </label>
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="javascript:void(0);" class="btn btn-primary btn-block">Apply Filter</a>
                    </div>
                </div>
                <div class="card mb-0">
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
            </div>
            <!--/Right Side Content-->

        </div>
    </div>
</section>
<!--/Add Listings-->

@endsection


@section('scripts')
<script>
    $(document).ready(function () {
        // Table Search
        $('.table_search').on('input', function(){
            var searchValue = $(this).val();

            $.ajax({
                url: "{{ route('searchWiseFilter') }}",
                type: "GET",
                data: {
                    searchValue: searchValue,
                },
                success: function(response){
                    console.log(response);
                    $('#propertySearch').html(response.data)
                }
            });
        });

        $('#filterProperty').on('change', function(){

            let filetrValue = $(this).val()

            $.ajax({
                url: "{{ route('propertyFilter') }}",
                type: "GET",
                data: {
                    filetrValue: filetrValue,
                },
                success: function(response){
                    console.log(response);
                    $('#propertySearch').html(response.data)
                }
            });
        })

    });
</script>
@endsection