@extends('backend.layouts.master')

@section('title','Landlord Dashboard - Property')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Property </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="{{ route('landlord.property.create') }}" class="btn btn-primary btn-sm">Add Property</a>
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
                            <th>Requested</th>
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
                            <td>{{ $property->status == 0 ? 'Pending' : 'Active' }}</td>
                            <td>
                                @if ($property->agent_status == 2)
                                    <input type="hidden" id="propertyID__{{$property->id}}" value="{{$property->id}}">
                                    <button class="btn btn-primary btn-sm" id="acceptAgent__{{ $property->id }}">Accept</button>
                                    <button class="btn btn-danger btn-sm" id="declineAgent__{{ $property->id }}">Decline</button>
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
                                      <li><a class="dropdown-item" href="{{ route('landlord.property_show', $property->slug) }}">View</a></li>
                                      <li><a class="dropdown-item" href="{{ route('landlord.property.edit', $property->id) }}">Edit</a></li>
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteProperty{{ $property->id }}">Delete</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>

                        <!-- Property Delete Modal -->
                        @push('modals')
                        <div class="modal fade" id="deleteProperty{{ $property->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="card-body text-center">
                                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24">
                                        <path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                                        <h4 class="h4 mb-0 mt-3">Warning</h4>
                                            <p class="card-text">Are you sure you want to delete data?</p>
                                            <strong class="card-text text-danger">Once deleted, you will not be able to recover this data!</strong>
                                        
                                    </div>
                                    <div class="card-footer text-center border-0 pt-0">
                                        <div class="row">
                                            <div class="text-center p-3 d-flex justify-content-center">
                                                <a href="javascript:void(0)" class="btn btn-dark me-2" data-bs-dismiss="modal">Cancel</a>
                                                <form action="{{ route('landlord.property.destroy', $property->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endpush

                        @push('scripts')
                        <script>
                            $(document).ready(function(){ 
                                $('#acceptAgent__{{$property->id}}').click(function(){
                                    let property_id = $('#propertyID__{{$property->id}}').val();
                                    // alert(agent_id);
                                    $.ajax({
                                        url: "{{ route('landlord.accept_request') }}",
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

                                $('#declineAgent__{{$property->id}}').click(function(){
                                    let property_id = $('#propertyID__{{$property->id}}').val();
                                    // alert(property_id);
                                    $.ajax({
                                        url: "{{ route('landlord.decline_request') }}",
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