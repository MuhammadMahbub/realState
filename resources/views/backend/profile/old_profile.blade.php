@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property')

@section('breadcrumb')
    <div class="col-lg-2">
        <div class="text-right">
            <a class="btn btn-primary" href="{{ route('property.index') }}"><i class="fa fa-step-backward"></i> Back</a>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <!-- Column -->
   
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <form action="{{ route('profile_image_update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                <div class="user-bg">
                     
                    <img width="100%" alt="user" src="plugins/images/large/img1.jpg" for="">
                        <div class="overlay-box">
                            <div class="user-content">
                                <label for="load_photo">
                                    @if (Auth::user()->image)
                                    <img src="{{ asset(Auth::user()->image) }}" id="product_image" name="image"  class="thumb-lg img-circle" alt="img" width="100%" style="cursor: pointer">
                                    @else
                                    <img src="{{ asset('backend/default.jpg') }}" id="product_image" name="image"  class="thumb-lg img-circle" alt="img" width="100%" style="cursor: pointer">
                                    @endif
                                        
                                    <h4 class="text-white mt-2">{{ Auth::user()->name ?? ''}}</h4>
                                    <h5 class="text-white mt-2">{{ Auth::user()->email ?? '' }}</h5>
                                </label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="user-btm-box mt-5 d-md-flex">
                        <h6><strong>Wallet Balance:</strong> Tsh 14,000</h6>
                    </div>
                    <div class="user-btm-box d-md-flex">
                        <button class="btn btn-success m-auto">Update Image</button>
                    </div>
                    <input type="file" id="load_photo" onchange="document.getElementById('product_image').src=window.URL.createObjectURL(this.files[0])" name="image" class="d-none form-control">
                </form> 
                
            </div>
        </div>
    
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" action="{{ route('profile.update', Auth::id()) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Full Name</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="Johnathan Doe"
                                class="form-control p-0 border-0" name="name" value="{{ Auth::user()->name ?? '' }}"> </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="example-email" class="col-md-12 p-0">Email</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="email" placeholder="johnathan@admin.com" value="{{ Auth::user()->email ?? '' }}"
                                class="form-control p-0 border-0" name="email"
                                id="example-email">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Password</label>
                        <div class="col-md-12 border-bottom p-0"> 
                            <input type="password" name="password" class="form-control p-0 border-0" placeholder="****">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Phone No</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="123 456 7890"
                                class="form-control p-0 border-0" name="phone" value="{{ Auth::user()->phone ?? '' }}">
                        </div>
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="col-sm-12">Location</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="123 456 7890"
                                class="form-control p-0 border-0" name="location" value="{{ Auth::user()->location ?? '' }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-sm-12">Website</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="123 456 7890"
                                class="form-control p-0 border-0" name="website" value="{{ Auth::user()->website ?? '' }}">
                        </div>
                    </div>
                    <div class="form-group">  
                        <label>Social Links</label>
                        @if ( Auth::user()->social_links)
                            @foreach (json_decode(Auth::user()->social_links) as $links)
                                <div class="row main-div mt-2">
                                    <div class="col-md-10">
                                        <input type="text" value="{{ $links }}" name="social_links[]"  placeholder="https://www.twitter.com/" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button"  class="remove_btn">&times;</button>
                                    </div>
                                </div> 
                            @endforeach
                        @endif
                    
                        <div class="new_data"></div>
                        <div class="btn btn-info mt-2 add_btn" id="">Add</div>
                        @error('social_links')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $(".add_btn").click(function(){
            let data = `
                <div class="row main-div mt-2">
                    <div class="col-md-10">
                        <input type="text" name="social_links[]"  placeholder="https://www.twitter.com/" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="remove_btn">&times;</button>
                    </div>
                </div> 
            `;
            $(".new_data").append(data);
        })

        $(document).on('click', '.remove_btn', function(){
            $(this).closest(".main-div").remove();
        }) 
    })
</script>
@endpush