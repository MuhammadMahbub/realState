@extends('backend.layouts.master')

@section('title', "Dashbord - BPS ADMIN DASHBOARD")
    
@section('count_section')
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Properties</h6>
                        <h3>12,000</h3>
                    </div>
                    <div class="icon-box bg-primary-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Tenants</h6>
                        <h3>24,456</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Landlords</h6>
                        <h3>14,564</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Agents</h6>
                        <h3>5,765</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Contractors</h6>
                        <h3>124</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Service Providers</h6>
                        <h3>142</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Chats</h6>
                        <h3>754,214</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="20" height="22" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.9026 6.85114L12.4593 10.4642C11.6198 11.1302 10.4387 11.1302 9.59922 10.4642L5.11844 6.85114" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9089 19C18.9502 19.0084 21 16.5095 21 13.4384V6.57001C21 3.49883 18.9502 1 15.9089 1H6.09114C3.04979 1 1 3.49883 1 6.57001V13.4384C1 16.5095 3.04979 19.0084 6.09114 19H15.9089Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card chart-grd same-card">
            <div class="card-body depostit-card p-0">
                <div class="depostit-card-media d-flex justify-content-between pb-0">
                    <div>
                        <h6>Total Revenue</h6>
                        <h3>$54,245,741.00</h3>
                    </div>
                    <div class="icon-box bg-danger-light">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.64111 13.5497L9.38482 9.9837L12.5145 12.4421L15.1995 8.97684" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <ellipse cx="18.3291" cy="3.85021" rx="1.76201" ry="1.76201" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.6808 2.86012H7.01867C4.25818 2.86012 2.54651 4.81512 2.54651 7.57561V14.9845C2.54651 17.7449 4.22462 19.6915 7.01867 19.6915H14.9058C17.6663 19.6915 19.3779 17.7449 19.3779 14.9845V8.53213" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection

@section('content')
<!-- Listing Analytics -->
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="card-header border-0 pb-0 flex-wrap">
                <h4 class="heading mb-0">Listing Analytics</h4>
                <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation" style="margin-right:50px;">
                    <button class="nav-link" type="button"  aria-selected="false"><i class="fa fa-file"></i> Export Report</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                    </li>
                    <li class="nav-item" id="custom" style="margin-left:50px;">
                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>									  
                </li>
                </ul>
            </div>
            <div class="card-body" style="padding: 50px;">
            <canvas id="property" style="width:100%;max-height:400px"></canvas>
            <br/>
            <ul class="inline">
            <li><i class="fa fa-circle" style="color: red;"></i> For Sale</li>
            <li><i class="fa fa-circle" style="color: green;"></i> For Rent</li>
            <li><i class="fa fa-circle" style="color: blue;"></i> Total Listed</li>
        </ul>
            </div>
        </div>
    </div>
<!-- End Listing Analytics -->
<!-- Sales Analytics -->
<div class="col-lg-12">
    <div class="card overflow-hidden">
        <div class="card-header border-0 pb-0 flex-wrap">
            <h4 class="heading mb-0">Sales Analytics</h4>
            <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation" style="margin-right:50px;">
                <button class="nav-link" type="button"  aria-selected="false"><i class="fa fa-file"></i> Export Report</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                </li>
                <li class="nav-item" id="custom" style="margin-left:50px;">
                <div id="salesrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>									  
            </li>
            </ul>
        </div>
        <div class="card-body" style="padding: 50px;">
        <canvas id="sales" style="width:100%;max-height:400px"></canvas>
        <br/>
        <ul class="inline">
        <li><i class="fa fa-circle" style="color: red;"></i> From Sales</li>
        <li><i class="fa fa-circle" style="color: green;"></i> From Rentals</li>
        <li><i class="fa fa-circle" style="color: blue;"></i> Total Sales</li>
    </ul>
        </div>
    </div>
</div>
<!-- End Sales Analytics -->
<!-- Agents Analytics -->
<div class="col-lg-12">
    <div class="card overflow-hidden">
        <div class="card-header border-0 pb-0 flex-wrap">
            <h4 class="heading mb-0">Agents Analytics</h4>
            <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation" style="margin-right:50px;">
                <button class="nav-link" type="button"  aria-selected="false"><i class="fa fa-file"></i> Export Report</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                </li>
                <li class="nav-item" id="custom" style="margin-left:50px;">
                <div id="agentsrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>									  
            </li>
            </ul>
        </div>
        <div class="card-body" style="padding: 50px;">
        <canvas id="agents" style="width:100%;max-height:400px"></canvas>
        <br/>
        <ul class="inline">
        <li><i class="fa fa-circle" style="color: red;"></i> Active Agents</li>
        <li><i class="fa fa-circle" style="color: green;"></i> Total Agents</li>                                
        </ul>
        </div>
    </div>
</div>
<!-- End of Agents -->
@endsection


@section('list_section')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive active-projects style-1">
                <div class="tbl-caption">
                    <h4 class="heading mb-0">Users List</h4>
                    <div>
                        <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Agent</a>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                  + Invite Agent
                                </button>
                    </div>
                </div>
                    <table id="empoloyees-tblwrapper" class="table">
                        <thead>
                            <tr>
                                <th>Agent ID</th>
                                <th>Agent Name</th>
                                <th>Email Address</th>
                                <th>Contact Number</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>1</span></td>
                                <td>
                                    <div class="products">
                                        <img src="{{asset('backend/assets/images')}}/contacts/pic2.jpg" class="avatar avatar-md" alt="">
                                        <div>
                                            <h6>Liam Antony</h6>
                                            <span>Contractor</span>	
                                        </div>	
                                    </div>
                                </td>
                                <td><span class="text-primary">abc@gmail.com</span></td>
                                <td>
                                    <span>+91 123 456 7890</span>
                                </td>
                                <td>
                                    <span>Dar es salaam</span>
                                </td>
                                <td>
                                    <select>
                                        <option>Edit</option>
                                        <option>Block</option>
                                        <option>Delete</option>
                                    </select>
                                </td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('modals')
    <!-- Add Agents -->
    <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
        <div class="offcanvas-header">
        <h5 class="modal-title" id="#gridSystemModal">Add Agent</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                {{-- <div>
                    <label>Profile Picture</label>
                    <div class="dz-default dlab-message upload-img mb-3">	
                        <form action="#" class="dropzone">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="fallback">
                                <input name="file" type="file" multiple>
                                
                            </div>
                        </form>
                    </div>	
                </div> --}}
                <form action="{{ route('register_agent') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Agent Name<span class="text-danger">*</span></label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter Agent Name">
                        </div>	
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Agent Email<span class="text-danger">*</span></label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput3" placeholder="Enter Agent Name">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
                            <input name="password" type="password" class="form-control" id="exampleFormControlInput4" placeholder="Enter Agent Password">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
                            <input name="phone" type="number" class="form-control" id="exampleFormControlInput88" placeholder="Enter Phone Number">
                        </div>>
                        {{-- <div class="col-xl-6 mb-3">
                            <label class="form-label">Country<span class="text-danger">*</span></label>
                            <select class="default-select form-control">
                                <option  data-display="Select">Please select</option>
                                <option value="html">Tanzania</option>
                                <option value="css">Kenya</option>
                                <option value="javascript">Uganda</option>
                                <option>Rwanda</option>
                                <option>Burundi</option>
                                <option>Botswana</option>
                                <option>Namibia</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">City<span class="text-danger">*</span></label>
                            <select class="default-select form-control">
                                <option  data-display="Select">Please select</option>
                                <option value="html">Dar es salaam</option>
                                <option value="css">Mbeya</option>
                                <option value="javascript">Zanzibar</option>
                                <option>Mwanza</option>
                            </select>
                        </div> --}}
                        
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">Gender<span class="text-danger">*</span></label>
                            <select name="gender" class="default-select form-control">
                                <option  data-display="Select">Please select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label class="form-label">About<span class="text-danger">*</span></label>
                            <textarea rows="2" class="form-control"></textarea>
                        </div>	
                    </div>
                    <div>
                        <button class="btn btn-primary me-1" type="submit">Submit</button>
                        <button class="btn btn-danger light ms-1">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        </div>		
        <!-- Add Agents End -->

        <!-- Invite New Agents -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Agent</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Enter Email">
                            <div class="row">
                                <div class="col-xl-6">
                                    <label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Surname">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 invite">
                                <label class="form-label">Send invitation email<span class="text-danger">*</span></label>
                                <input type ="email" class="form-control " placeholder="+ invite">
                            </div>
                            
                    
                        </div>
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Invite New Agent End -->
    @endpush
@endsection