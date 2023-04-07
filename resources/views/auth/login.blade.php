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
                            @error('message')
                                {{ $message }}
                            @enderror
                            <form id="Register" class="card-body" tabindex="500" action="{{ route('login') }}" method="POST">
                                @csrf
                               
                                <h3 class="pb-1">Login</h3>
                                
                                <div class="name">
                                    <input type="text" name="email">
                                    <label>Email</label>
                                </div>
                                {{-- @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}
                                
                                <div class="passwd">
                                    <input type="password" name="password">
                                    <label>Password</label>
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                
                                <div class="submit">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                                <p class="text-dark mb-0">Forgot Password?<a href="register.html" class="text-primary mx-1">click here to reset</a></p>
                            </form>
                            <hr class="divider">
                            <div class="p-3 pb-0">
                                <div class="row">
                                    <div class="col-6 mb-2">
                                        <a href="#" class="btn btn-light btn-block text-start">
                                            <img src="{{asset('frontend')}}/assets/images/svg/facebook.svg" alt="" class="w-4 h-4 me-2">
                                            <span class="font-weight-bold fs-15">Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-6  mb-2">
                                        <a href="#" class="btn btn-light btn-block text-start">
                                            <img src="{{asset('frontend')}}/assets/images/svg/google.svg" alt="" class="w-4 h-4 me-2">
                                            <span class="font-weight-bold fs-15">Google</span>
                                        </a>
                                    </div>
                                    <div class="col-6  mb-2">
                                        <a href="#" class="btn btn-light btn-block text-start">
                                            <img src="{{asset('frontend')}}/assets/images/svg/linkedin.svg" alt="" class="w-4 h-4 me-2">
                                            <span class="font-weight-bold fs-15">LinkedIn</span>
                                        </a>
                                    </div>
                                    <div class="col-6  mb-2">
                                        <a href="#" class="btn btn-light btn-block text-start">
                                        <img src="{{asset('frontend')}}/assets/images/svg/twitter.svg" alt="" class="w-4 h-4 me-2">
                                            <span class="font-weight-bold fs-15">Twitter</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Register-section-->
@endsection