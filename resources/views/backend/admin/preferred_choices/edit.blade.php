@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property Create')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Update Preferred Choices </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    {{-- <a href="{{ route('property.create') }}" class="btn btn-primary btn-sm">Add Property</a> --}}
</div>
@endsection
 
{{-- fe fe-pocket text-primary --}}
@section('content')
<div class="row">
    <div class="col-md-10 m-auto">
        <div class="card p-3">
            <form action="{{ route('preferred_choices.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                    <label>Icon Name</label>
                    <input type="text" name="icon_name" value="{{ $data->icon_name }}" class="form-control" placeholder="fe fe-pocket text-primary">
                    @error('icon_name')
                    <small class="text-danger font-bold">{{ $message }}</small>
                    @enderror   
                </div>
                <div class="form-group mt-3">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $data->title }}" class="form-control" placeholder="title">
                    @error('title')
                    <small class="text-danger font-bold">{{ $message }}</small>
                    @enderror   
                </div>
                <div class="form-group mt-3">
                    <label>Description</label>
                   <textarea name="description" id="" cols="30" rows="7" class="form-control" placeholder="Write description">{{ $data->description }}</textarea>
                   @error('description')
                   <small class="text-danger font-bold">{{ $message }}</small>
                   @enderror   
                </div>
                <div class="form-group mt-3">
                   <input type="submit" class="btn btn-success" value="Update">
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection

 