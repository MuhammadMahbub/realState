@extends('frontend.layouts.master')

@section('title','Baobab Property Services')


@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('frontend')}}/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Register</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Register</li>
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
                            <form id="Register" class="card-body" tabindex="500" action="{{ route('register') }}" method="post">
                                @csrf
                                <h3 class="pb-1">Register</h3>
                                <div class="name mt-2">
                                    <input type="text" name="name">
                                    <label>Full Name*</label>
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mail mt-2">
                                    <input type="text" name="email">
                                    <label>Email*</label>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mail mt-2">
                                    <input type="text" name="phone">
                                    <label>Phone Number</label>
                                </div>
                                <div class="passwd">
                                    <input type="password" name="password">
                                    <label>Password*</label>
                                </div>
                                {{-- @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                                <div class="passwd mt-2">
                                    <input type="password" name="password_confirmation">
                                    <label>Confirm Password*</label>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="name mt-2">
                                    <select name="role" id="select-Categories12" class="form-control form-select select2 br-tr-md-0 br-br-md-0">
                                        <option selected value="">Register as*</option>
                                        <option value="2">Agent</option>
                                        <option value="3">Tenant</option>
                                        <option value="4">Landlord</option>
                                        <option value="5">Contractor</option>
                                        <option value="6">Service Provider</option>
                                    </select>
                                </div>
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="submit mt-2">
                                    <button class="btn btn-primary w-100" type="submit">Register</button>
                                </div>
                                <p class="text-dark mb-0">Already have an account?<a href="{{ route('login') }}" class="text-primary mx-1">Sign In</a></p>
                            </form>
                            <hr class="divider">
                            <div class="p-3 pb-0">
                                <div class="row">
                                    <div class="col-6 mb-2">
                                        <a href="https://www.facebook.com/" class="btn btn-light btn-block text-start">
                                            <img src="{{asset('frontend')}}/assets/images/svg/facebook.svg" alt="" class="w-4 h-4 me-2">
                                            <span class="font-weight-bold fs-15">Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-6  mb-2">
                                        <a href="https://www.google.com/gmail/" class="btn btn-light btn-block text-start">
                                            <img src="{{asset('frontend')}}/assets/images/svg/google.svg" alt="" class="w-4 h-4 me-2">
                                            <span class="font-weight-bold fs-15">Google</span>
                                        </a>
                                    </div>
                                    <div class="col-6  mb-2">
                                        <a href="https://twitter.com/" class="btn btn-light btn-block text-start">
                                            <img src="{{asset('frontend')}}/assets/images/svg/linkedin.svg" alt="" class="w-4 h-4 me-2">
                                            <span class="font-weight-bold fs-15">LinkedIn</span>
                                        </a>
                                    </div>
                                    <div class="col-6  mb-2">
                                        <a href="https://twitter.com/" class="btn btn-light btn-block text-start">
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