@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property Create')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Property </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="{{ route('property.index') }}" class="btn btn-primary btn-sm"> <i data-feather="arrow-left"></i> Back</a>
</div>
@endsection

@section('content')

    <div class="card">
        <form action="{{ route('property.update', $property->id) }}" method="post" class="form-group mt-2" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            @if (Auth::user()->role == 1)
            <div class="form-group mt-3">
                <label for="">Change Status<span class="text-danger">*</span></label>
                <select name="status" id="" class="form-control">
                    <option value="1" {{ $property->status == 1 ? 'selected' : '' }}>Approve</option>
                    <option value="0" {{ $property->status == 0 ? 'selected' : '' }}>Pending</option>
                </select>  
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            @endif

            <div class="form-group mt-3">
                <label for="">Property Category<span class="text-danger">*</span></label>
                <select name="category_id" id="" class="form-control">
                    <option value selected>--select one--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $property->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
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
                        <option value="{{ $type->id }}" {{ $property->property_type_id == $type->id ? 'selected' : '' }}>{{ $type->type_name }}</option>
                    @endforeach    
                </select>  
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror 
            </div> 

            <div class="form-group mt-2">
                <label>Previous Thumbnail Image </label>
                
                <img src="{{ asset($property->thumbnail_image) }}" width="200">
            </div>
            <div class="form-group mt-2">
                <label> Thumbnail Image <span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="thumbnail_image" onchange="document.getElementById('thumbnail_image').src=window.URL.createObjectURL(this.files[0])"/>

                <img id="thumbnail_image" width="200">
            </div>
            @error('thumbnail_image')
                <span class="text-danger">{{ $message }}</span>
            @enderror  

            <div class="form-group mt-2">
                <label>Previous Multiple Image </label>
                
                @foreach ($property->relationwithMultipleImage as $img)
                    <img src="{{ asset($img->multiple_image) }}" alt="" width="200" class="ms-3">
                    <button type="button" class="btn-close remove_image" data-id="{{ $img->id }}" aria-label="Close" ></button>
                @endforeach
            </div>

            <div class="form-group mt-3">  
                <label>Multiple Image</label>
                <input type="file" name="multiple_image[]"  class="form-control" multiple>
                
            </div>

            <div class="form-group mt-2">
                <label for="">Short Title<span class="text-danger">*</span></label>
                <input type="text" value="{{ $property->short_title }}" name="short_title" placeholder="Short Title" class="form-control">  
                @error('short_title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Location</label>
                <input type="text" value="{{ $property->location }}" name="location" placeholder="Location" class="form-control">  
                @error('location')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Price<span class="text-danger">*</span></label>
                <input type="number" value="{{ $property->price }}"  name="price" placeholder="Price" class="form-control">  
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Property Unique ID</label>
                <input type="text" {{ $property->property_id }}  name="property_id" placeholder="Property ID" class="form-control">  
                @error('property_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Description</label>
                <textarea name="description"  id="editor__{{ $property->id }}" cols="30" rows="10" class="form-control">{{ $property->description }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <input type="checkbox" name="isFavorite" id="isFavorite" {{ $property->isFavorite == 1 ? 'checked':'' }}>
                <label for="isFavorite" class="ms-4">Is Favourite</label>
                @error('isFavorite')
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
<script>
    ClassicEditor
        .create( document.querySelector( '#editor__{{ $property->id }}' ) ,{
            ckfinder: {
                uploadUrl: "{{route('ckeditor_image.upload').'?_token='.csrf_token()}}"
            }
        });
</script>

<script>
    $(document).ready(function(){
        
        $(".remove_image").click(function(){
            let data_id = $(this).attr('data-id')
// alert(data_id)
            $.ajax({
                    url: "{{ route('remove_multiple_image') }}",
                    type: "POST",
                    data: {
                        data_id: data_id,
                    },
                    success: function (response){
                        console.log(response)
                        location.reload();
                    },
                    error: function(){
                       
                    },
                });
            });
    })
</script>
@endpush