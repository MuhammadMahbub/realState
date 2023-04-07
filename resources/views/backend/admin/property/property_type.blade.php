@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property Type')

@section('breadcrumb')

    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Property Type</h5></li>
        </ol>
        <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
        <a href="add-listing.html" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addType">Add Property Type</a>
    </div>
@endsection

@section('content')
<style>
    .dropdown-toggle::after {
        display: none !important;
    }
</style>

<div class="col-xl-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects style-1">
            <div class="tbl-caption">
                <h4 class="heading mb-0">Property Type Listing</h4>
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
                            <th>SL</th>
                            <th>Property Types</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                        <tr>
                            <td><span>{{ $loop->index + 1 }}</span></td>
                            <td>
                                <span>{{ $type->type_name ?? '' }}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editType{{ $type->id }}">Edit</a></li>
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteType{{ $type->id }}">Delete</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>

                        {{-- type Edit Modal --}}
                        @push('modals')
                        <div class="modal fade" id="editType{{ $type->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Property Type</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('property_type.update',$type->id) }}" method="post" class="form-group">
                                        @csrf
                                        @method("PUT")
                                        <div class="modal-body">
                                            <label for="">Property Type<span class="text-danget">*</span></label>
                                            <input type="text" value="{{ $type->type_name }}" name="type_name" placeholder="Rent / Sale" class="form-control">  
                                            @error('type_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror  
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endpush
                        <!-- Type Delete Modal -->
                        @push('modals')
                        <div class="modal fade" id="deleteType{{ $type->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="card-body text-center">
                                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24">
                                        <path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                                        <h4 class="h4 mb-0 mt-3">Warning</h4>
                                        {{-- @if ($count_sub > 0)
                                            <strong class="card-text text-red">Topics are available in this category, please delete those first</strong>
                                        @else --}}
                                            <p class="card-text">Are you sure you want to delete data?</p>
                                            <strong class="card-text text-danger">Once deleted, you will not be able to recover this data!</strong>
                                        {{-- @endif --}}
                                    </div>
                                    <div class="card-footer text-center border-0 pt-0">
                                        <div class="row">
                                            <div class="text-center p-3 d-flex justify-content-center">
                                                <a href="javascript:void(0)" class="btn btn-dark me-2" data-bs-dismiss="modal">Cancel</a>
                                                <form action="{{ route('property_type.destroy', $type->id) }}" method="POST">
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
                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>



@push('modals')
    <!-- type Add Modal -->
    <div class="modal fade" id="addType" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Property Type</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('property_type.store') }}" method="post" class="form-group">
                    @csrf
                    <div class="modal-body">
                        <label for="">Property Type<span class="text-danget">*</span></label>
                        <input type="text"  name="type_name" placeholder="Apartment / Shops / Office" class="form-control">  
                        @error('type_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        @if($errors->has('type_name') )
            $('#addType').modal('show');
        @endif
    })
</script>
@endpush

