@extends('frontend.layouts.master')

@section('title','Baobab Property Services')


@section('content')

     <!--Breadcrumb-->
     <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('frontend')}}/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Login</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Register-section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="single-page" >
                    <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                        <div class="wrapper wrapper2">
                            <form id="Register" class="card-body" tabindex="500" action="{{ route('verify_otp_code') }}" method="POST">
                                @csrf
                                <h3 class="pb-1">OTP</h3>
                                <div class="name">
                                    <input type="text" name="otp_code">
                                    <label>OTP</label>
                                </div>
                                
                                <div class="submit">
                                    <button class="btn btn-primary" type="submit">Send</button>
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Register-section-->
@endsection