@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property Create')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Property </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    {{-- <a href="{{ route('property.create') }}" class="btn btn-primary btn-sm">Add Property</a> --}}
</div>
@endsection

@section('content')

        <div class="card">
            <form action="{{ route('property.store') }}" method="post" class="form-group mt-2" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="">Property Category<span class="text-danger">*</span></label>
                    <select name="category_id" id="" class="form-control">
                        <option value selected>--select one--</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach    
                    </select>  
                    @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group mt-2">
                    <label for="">Property Type<span class="text-danger">*</span></label>
                    <select name="property_type_id" id="" class="form-control">
                        <option value selected>--select one--</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                        @endforeach    
                    </select>  
                    @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror 
                </div> 
    
                <div class="form-group mt-2">
                    <label> Thumbnail Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="thumbnail_image" onchange="document.getElementById('thumbnail_image').src=window.URL.createObjectURL(this.files[0])"/>
    
                    <img id="thumbnail_image" width="200" class="mt-2">
                </div>
                @error('thumbnail_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror  

                <div class="form-group mt-3">  
                    <label>Multiple Image</label>
                    <input type="file" name="multiple_image[]"  class="form-control" multiple>
                    
                </div>

                <div class="form-group mt-2">
                    <label for="">Short Title<span class="text-danger">*</span></label>
                    <input type="text"  name="short_title" placeholder="Short Title" class="form-control">  
                    @error('short_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="">Location</label>
                    <input type="text"  name="location" placeholder="Location" class="form-control">  
                    @error('location')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="">Price<span class="text-danger">*</span></label>
                    <input type="number"  name="price" placeholder="123" class="form-control">  
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="">Property Unique ID</label>
                    <input type="text"  name="property_id" placeholder="Property ID" class="form-control">  
                    @error('property_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="">Description <span class="text-danger">*</span></label>
                    <textarea name="description" id="editor" cols="30" rows="10" class="form-control"></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-5">
                    <input type="checkbox" name="isFavorite" id="isFavorite">
                    <label for="isFavorite" class="ms-2"><strong>Is Favourite</strong></label>
                    @error('isFavorite')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
    
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>

        
@endsection

@push('scripts')

@endpush