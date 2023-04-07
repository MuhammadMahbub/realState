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
            <form action="{{ route('property.store') }}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="">Property Category<span class="text-danget">*</span></label>
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
                
                <div class="form-group">
                    <label for="">Property Type<span class="text-danget">*</span></label>
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
    
                <div class="form-group">
                    <label> Thumbnail Image <span class="text-danget">*</span></label>
                    <input type="file" class="form-control" name="thumbnail_image" onchange="document.getElementById('thumbnail_image').src=window.URL.createObjectURL(this.files[0])"/>
    
                    <img id="thumbnail_image" width="200">
                </div>
                @error('thumbnail_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror  
                <div class="form-group">  
                    <label>Multiple Thumbnail Image</label>
                    <div class="row main-div mt-2">
                        <div class="col-md-10">
                            <input type="text" name="multiple_feature_image[]"  placeholder="Image Live Link" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="button"  class="remove_btn">&times;</button>
                        </div>
                    </div> 
                
                    <div class="new_data"></div>
                    <div class="btn btn-info mt-2" id="add_btn">Add</div>
                    @error('multiple_feature_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="">Short Title<span class="text-danget">*</span></label>
                    <input type="text"  name="short_title" placeholder="Short Title" class="form-control">  
                    @error('short_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text"  name="location" placeholder="Location" class="form-control">  
                    @error('location')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Price<span class="text-danget">*</span></label>
                    <input type="number"  name="price" placeholder="Location" class="form-control">  
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Property Unique ID</label>
                    <input type="text"  name="property_id" placeholder="Property ID" class="form-control">  
                    @error('property_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="editor" cols="30" rows="10" class="form-control"></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <input type="checkbox" name="isFavorite" id="isFavorite">
                    <label for="isFavorite" class="ms-4">Is Favourite</label>
                    @error('isFavorite')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <input id="status" type="checkbox" name="status">
                    <label for="status" class="ms-4">Status</label>
                    @error('property_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> --}}
    
    
    
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>

        
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $("#add_btn").click(function(){
            let data = `
                <div class="row main-div mt-2">
                    <div class="col-md-10">
                        <input type="text" name="multiple_feature_image[]"  placeholder="Image Live Link" class="form-control">
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