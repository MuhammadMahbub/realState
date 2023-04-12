@extends('backend.layouts.master')

@section('title','Admin Dashboard - Banner')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Banner </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    {{-- <a href="{{ route('property.index') }}" class="btn btn-primary btn-sm"> <i data-feather="arrow-left"></i> Back</a> --}}
</div>
@endsection

@section('content')

    <div class="card">
        <form action="{{ route('banner.update', $banner->id) }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label>Previous Image </label><br>
                
                <img src="{{ asset($banner->image) }}" width="400">
            </div>
            <div class="mt-4 form-group">
                <label>Image </label>
                <input type="file" class="form-control" name="image" onchange="document.getElementById('thumbnail_image').src=window.URL.createObjectURL(this.files[0])"/>

                <img id="thumbnail_image" width="200" class="mt-3">
            </div>
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror 

            <div class="form-group mt-2">
                <label for="">Title<span class="text-danger">*</span></label>
                <input type="text" value="{{ $banner->title }}" name="title" placeholder=" Title" class="form-control">  
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Sub Title<span class="text-danger">*</span></label>
                <input type="text" value="{{ $banner->sub_title }}" name="sub_title" placeholder="Sub Title" class="form-control">  
                @error('sub_title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
        
@endsection

@push('scripts')

@endpush