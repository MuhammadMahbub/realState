@extends('frontend.layouts.master')

@section('title','Baobab Property Services')

@section('content')

<!--sliders Section-->
<div>
    <div class="cover-image sptb-1 bg-background" data-bs-image-src="{{asset('frontend')}}/assets/images/banners/banner1.jpg">
        <div class="header-text1 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-12 col-md-12"></div>
                    <div class="col-xl-9 col-lg-12 col-md-12">
                        <div class="text-center text-white text-property">
                            <h1 ><span class="font-weight-bold">16,25</span> Agents Available</h1>
                        </div>
                        <div class=" search-background bg-transparent">
                            <div class="form row no-gutters">
                                <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                    <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Enter Loaction, Landmark">
                                    <span><i class="fa fa-map-marker location-gps me-1"></i></span>
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0">
                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
                                        <optgroup>
                                            <option>Agent Categories</option>
                                            <option value="1">Property for Rent</option>
                                            <option value="2">Property for Sale</option>
                                            
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <a href="javascript:void(0);" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-12 col-md-12"></div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>
</div>
<!--sliders Section-->

<!-- User-All-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h2>Top Agent List</h2>
            <p>Short description goes here...</p>
        </div>
        <div class="row">
            <div class="col-lg-12 users-list">
                <div class="page-header bg-white mb-4 p-4 border br-5" >
                    <select class="form-control page-select select2 agentFilter select-sm w-75">
                        <option value="">Select Options</option>
                        <option value="active">Active</option>
                        <option value="new">New</option>
                        <option value="all">A-Z</option>
                    </select>
                    <div class="page-options d-flex">
                        <div class="input-group">
                            <input type="text" name="name" class="table_search form-control br-tl-3  br-bl-3" placeholder="search">
                            <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card" id="agentSearch">
                    
                    @include('frontend.includes.agent_search')

                </div>
                <ul class="pagination mb-0">
                    <li class="page-item page-prev disabled">
                        <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item page-next">
                        <a class="page-link" href="javascript:void(0);">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
    // Table Search
    $('.table_search').on('input', function(){
        var searchValue = $(this).val();
        console.log(searchValue);
        
        $.ajax({
            url: "{{ route('searchAgent') }}",
            type: "GET",
            data: {
                searchValue: searchValue,
            },
            success: function(response){
                console.log(response);
                $('#agentSearch').html(response.data)
            }
        });
    });

    $('.agentFilter').on('change', function(){

        let filetrValue = $(this).val()
        console.log(filetrValue);

        $.ajax({
           url : "{{ route('agentFilter') }}",
            type: "GET",
            data: {
                filetrValue: filetrValue,
            },
            success: function(response){
                console.log(response);
                $('#agentSearch').html(response.data)
            }
        });
    });

});
</script>
@endsection