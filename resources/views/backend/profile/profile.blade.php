@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property')

@section('content')

<div class="row m-auto">
    <div class="mb-3 col-12 d-flex justify-content-center">
        <form action="{{ route('profile_image_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
        <div class="user-bg m-auto">
             
            {{-- <img width="100%" alt="user" src="{{ asset('backend/assets/plugins') }}/images/large/img1.jpg" for=""> --}}
                <div class="">
                    <div class="bg-dark mb-3">
                        <label for="load_photo">
                            @if (Auth::user()->image)
                            <img src="{{ asset(Auth::user()->image) }}" id="product_image" name="image"  class="thumb-lg img-circle" alt="img" width="300" style="cursor: pointer">
                            @else
                            <img src="{{ asset('backend/default.jpg') }}" id="product_image" name="image"  class="thumb-lg img-circle" alt="img" width="300" style="cursor: pointer">
                            @endif
                                
                            <div class="text-center">
                                <h4 class="text-white mt-2">{{ Auth::user()->name ?? ''}}</h4>
                                <h5 class="text-white mt-2">{{ Auth::user()->email ?? '' }}</h5>
                            </div>
                        </label>
                    </div>
                </div>
                
            </div>
            {{-- <div class="user-btm-box mt-5 d-md-flex">
                <h6><strong>Wallet Balance:</strong> Tsh 14,000</h6>
            </div> --}}
            <div class="user-btm-box d-md-flex m-auto">
                <button class="btn btn-primary m-auto">Update Image</button>
            </div>
            <input type="file" id="load_photo" onchange="document.getElementById('product_image').src=window.URL.createObjectURL(this.files[0])" name="image" class="d-none form-control">
        </form>
    </div>
</div>


<div class="card" style="padding: 20px;">
    <div class="pt-3">
        <div class="settings-form">
            <h4 class="text-primary">Account Settings</h4>
            <form action="{{ route('profile_update', Auth::id()) }}" method="POST">
                @csrf
                @method("PATCH")
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Fullname</label>
                        <input type="fullname" placeholder="Fullname" name="name" class="form-control" value="{{ Auth::user()->name ?? '' }}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" placeholder="Email" name="email" class="form-control" value="{{ Auth::user()->email ?? '' }}">
                    </div>
                </div>
                <div class="row">
                <div class="mb-3 col-lg-6">
                    <label class="form-label">Phone</label>
                    <input type="number" placeholder="Phone Number" name="phone" class="form-control" value="{{ Auth::user()->phone ?? '' }}">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" placeholder="*****" name="password" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Location</label>
                    <input type="text" value="{{ Auth::user()->location ?? "" }}" name="location" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Website</label>
                    <input type="text" value="{{ Auth::user()->website ?? "" }}" name="website" class="form-control">
                </div>
            </div>
            {{-- <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">City</label>
                        <select class="form-control default-select wide profile-page" id="inputState">
                            <option selected="">Choose...</option>
                            <option>Mbeya</option>
                            <option>Mwanza</option>
                            <option>Dar es salaam</option>
                            <option>Zanzibar</option>
                            <option>Arusha</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Country</label>
                        <select class="form-control default-select wide profile-page" id="inputState">
                            <option selected="">Choose...</option>
                            <option>Tanzania</option>
                            <option>Kenya</option>
                            <option>Uganda</option>
                            <option>Rwanda</option>
                            <option>Botswana</option>
                            <option>South Africa</option>
                        </select>
                    </div>
                </div> --}}

                <div class="form-group mb-2">  
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
                {{-- <div class="mb-3">
                    <div class="form-check custom-checkbox">
                        <input type="checkbox" class="form-check-input" id="gridCheck">
                        <label class="form-check-label form-label" for="gridCheck"> Remember me</label>
                    </div>
                </div> --}}
                <button class="btn btn-primary" type="submit">Update
                </button>
            </form>
        </div>
    </div>
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
                        <button type="button" class="remove_btn"><span>&times;</span></button>
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