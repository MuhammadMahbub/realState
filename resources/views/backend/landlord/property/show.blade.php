@extends('backend.layouts.master')

@section('title','Landlord Dashboard - Property')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Property </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="{{ route('landlord.property.index') }}" class="btn btn-primary btn-sm"> <i data-feather="arrow-left"></i> Back</a>
</div>
@endsection

@section('content')

 <!-- White Box -->
 <div class="card">
    
    <!-- Table with the list of all Tenants -->  
    <div class="my-4 ">
        <table class="table table-bordered table-fixed">
            
            <tbody>
                <tr class="mb-4 mt-3">
                    <img src="{{ asset($property->thumbnail_image) }}" alt="" width="200">
                </tr>       
                 <tr class="mt-5">
                    <th >Title</th>
                    <td>{{ $property->short_title ?? ''}}</td>
                </tr>
                <tr>
                    <th>Category Name</th>
                    <td>{{ $property->relationwithPropertyCategory->category_name ?? ''}}</td>
                </tr>
                <tr>
                    <th>Property Type</th>
                    <td>{{ $property->relationwithPropertyType->type_name ?? ''}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>${{ $property->price ?? ''}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $property->status == 1 ? 'Active' : 'InActive'}}</td>
                </tr>
                <tr>
                    <th>Is Favorite ?</th>
                    <td>{{ $property->isFavorite == 1 ? 'Favourite' : 'No'}}</td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td>{{ $property->location ?? ''}}</td>
                </tr>
                <tr>
                    <th>Specification</th>
                    <td>
                        @foreach ($property->relationwithPropertySpecification as $pro)
                            {!! $pro->icon !!} - {{ $pro->specification }}</br>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td class="">
                        <span class="wrap__text">{!! $property->description !!}</span>
                    </td>
                </tr>
                <tr>
                    <th>Multi Images</th>
                    <td>
                        @foreach (json_decode($property->multiple_feature_image) as $image)
                            <img src="{{ $image }}" alt="" width="200">
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table> 
    </div>
</div>
<!-- End of white box -->


@endsection