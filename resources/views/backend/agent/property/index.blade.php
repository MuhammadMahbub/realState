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
                            <td>
                                <input type="hidden" id="propertyID__{{$property->id}}" value="{{$property->id}}">
                                @if ($property->agent_status == 2)
                                    Requested/<a href="javascript:void(0)" class="text-danger" id="cancelRequest__{{$property->id}}">Cancel</a>
                                @elseif ($property->agent_status == 1)
                                    Owned/<a href="javascript:void(0)" class="text-danger" id="cancelRequest__{{$property->id}}">Cancel</a>
                                @else
                                    <button class="btn btn-primary btn-sm" id="sendRequest__{{$property->id}}">Request</button>
                                @endif
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
                                $('#sendRequest__{{$property->id}}').click(function(){
                                    let property_id = $('#propertyID__{{$property->id}}').val();
                                    // alert(property_id);
                                    $.ajax({
                                        url: "{{ route('send_request') }}",
                                        type: "POST",
                                        data: {
                                            property_id : property_id,
                                        },
                                        success: function(data){
                                            console.log(data);
                                            toastr.success(data.message)
                                            location.reload()
                                        },
                                    });
                                });

                                $('#cancelRequest__{{$property->id}}').click(function(){
                                    
                                    let property_id = $('#propertyID__{{$property->id}}').val();
                                    // alert(property_id);
                                    $.ajax({
                                        url: "{{ route('cancel_request') }}",
                                        type: "POST",
                                        data: {
                                            property_id : property_id,
                                        },
                                        success: function(data){
                                            console.log(data);
                                            toastr.success(data.message)
                                            location.reload()
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