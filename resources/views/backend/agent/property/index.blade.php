@extends('backend.layouts.master')

@section('title','Agent Dashboard - Property')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Property </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="{{ route('property.create') }}" class="btn btn-primary btn-sm">Add Property</a>
</div>
@endsection

@section('content')

<div class="col-xl-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects style-1">
            <div class="tbl-caption">
                <h4 class="heading mb-0">Category Listing</h4>
                <div>
                    <select>
                     <option>View All</option>
                     <option>Listed By BPS</option>
                     <option>Listed By Landlords</option>
                     <option>Listed By Agents</option>
                     <option>New Properties</option>
                     <option>Sold Properties</option>
                     <option>Occupied Properties</option>
                     <option>Open Properties</option>
                     <option>Properties For Sale</option>
                     <option>Properties For Rent</option>
                 </select>
                </div>
            </div>
                <table id="empoloyees-tblwrapper" class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category Name</th>
                            <th>Property Type</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $property)
                        <tr>
                            <td>{{ $property->short_title ?? ''}}</td>
                            <td>{{ $property->relationwithPropertyCategory->category_name ?? ''}}</td>
                            <td>{{ $property->relationwithPropertyType->type_name ?? ''}}</td>
                            {{-- <td>{{ $property->status == 0 ? 'Pending' : 'Active' }}</td> --}}
                            <td>
                                <input type="hidden" id="option__{{$property->id}}" value="{{$property->id}}">
                                <select class="select-opt form-control p-1 optionChange" id="statusChange__{{$property->id}}">
                                    <option value="1" {{$property->agent_status == 1 ? 'selected' : ''}}>Owned</option>
                                    <option value="0" {{$property->agent_status == 0 ? 'selected' : ''}}>Requesting</option>
                                </select>
                            </td>
                            <td>
                                <img src="{{ asset($property->thumbnail_image) }}" alt="" width="100">
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="{{ route('property.show', $property->id) }}">View</a></li>
                                      {{-- <li><a class="dropdown-item" href="{{ route('property.edit', $property->id) }}">Edit</a></li>
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteProduct{{ $property->id }}">Delete</a></li> --}}
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                       

                        @push('scripts')
                        <script>
                            $(document).ready(function(){ 
                            $('#statusChange__{{$property->id}}').change(function(){
                                let status = $(this).val();
                                let property_id = $('#option__{{$property->id}}').val();
                                // alert(property_id);
                                $.ajax({
                                    url: "{{ route('request_owned') }}",
                                    type: "POST",
                                    data: {
                                        property_id : property_id,
                                        status : status,
                                    },
                                    success: function(data){
                                        console.log(data);
                                        toastr.success(data.message)
                                    },
                                });
                            });
                            });
                        </script>
                        @endpush

                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>


@endsection