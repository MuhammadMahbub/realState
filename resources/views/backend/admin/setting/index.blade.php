@extends('backend.layouts.master')

@section('title','Admin Dashboard - Settings')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">General Settings </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    {{-- <a href="{{ route('property.index') }}" class="btn btn-primary btn-sm"> <i data-feather="arrow-left"></i> Back</a> --}}
</div>
@endsection

@section('content')

    <div class="card">
        <form action="{{ route('setting.update', $setting->id) }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group mt-4">
                <label>Previous Logo </label><br>
                
                <img src="{{ asset($setting->front_logo) }}" width="200">
            </div>
            <div class="mt-4 form-group">
                <label>Front Logo </label>
                <input type="file" class="form-control" name="front_logo" onchange="document.getElementById('front_logo').src=window.URL.createObjectURL(this.files[0])"/>

                <img id="front_logo" width="200" class="mt-3">
            </div>
            @error('front_logo')
                <span class="text-danger">{{ $message }}</span>
            @enderror 

            <div class="form-group">
                <label>Previous Logo </label><br>
                
                <img src="{{ asset($setting->back_logo) }}" width="200">
            </div>
            <div class="mt-4 form-group">
                <label>Dashboard Logo </label>
                <input type="file" class="form-control" name="back_logo" onchange="document.getElementById('back_logo').src=window.URL.createObjectURL(this.files[0])"/>

                <img id="back_logo" width="200" class="mt-3">
            </div>
            @error('back_logo')
                <span class="text-danger">{{ $message }}</span>
            @enderror 

            <div class="form-group mt-2">
                <label for="">Copyright<span class="text-danger">*</span></label>
                <input type="text" value="{{ $setting->copyright }}" name="copyright" placeholder="Copyright" class="form-control">  
                @error('copyright')
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