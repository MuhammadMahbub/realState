@extends('backend.layouts.master')

@section('title','Admin Dashboard - Membership')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Membership </h5></li>
    </ol>
    <a href="#" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="add-listing.html" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addMembership">Add Membership Type</a>
</div>
@endsection

@section('content')

<div class="col-xl-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects style-1">
            <div class="tbl-caption">
                <h4 class="heading mb-0">Membership Listing</h4>
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
                            <th>Membership Type</th>
                            <th>Percent</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($membership as $membership)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $membership->membership_type == 2 ? 'Agent' : 'Landlord' }}</td>
                            <td>{{ $membership->percent ?? '' }}</td>
                            
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editMembership{{ $membership->id }}">Edit</a></li>
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteMembership{{ $membership->id }}">Delete</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>

                        {{-- Membership Edit Modal --}}
                        @push('modals')
                        <div class="modal fade" id="editMembership{{ $membership->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Membership </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('membership_update', $membership->id) }}" method="post" class="form-group" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="modal-body">
                                            
                                            <div class="form-group">
                                                <label for="">MemberShip Type -- {{ $membership->membership_type == 2 ? 'Agent' : 'Landlord' }}</label>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for=""> Percent<span class="text-danger">*</span></label>
                                                <input type="text" value="{{ $membership->percent }}" name="percent" placeholder="" class="form-control">  
                                                @error('percent')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endpush
                        <!-- Membership Delete Modal -->
                        @push('modals')
                        <div class="modal fade" id="deleteMembership{{ $membership->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form action="{{ route('membership_destroy', $membership->id) }}" method="POST">
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
        <!-- End of white box -->

        @push('modals')
            <!-- Membership Add Modal -->
            <div class="modal fade" id="addMembership" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Membership Type </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('membership_store') }}" method="post" class="form-group" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                    
                                <div class="form-group">
                                    <label for="">MemberShip Type<span class="text-danger">*</span></label>
                                    <select name="membership_type" id="" class="form-control">
                                        <option value selected>--select one--</option>
                                        <option value="2">Agent</option>    
                                        <option value="4">Landlord</option>     
                                    </select>  
                                    @error('membership_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Percent<span class="text-danger">*</span></label>
                                    <input type="text"  name="percent" placeholder="7" class="form-control">  
                                    @error('percent')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> 
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endpush
    </div>
</div>
@endsection


@push('scripts')
<script>
    $(document).ready(function(){
        @if($errors->has('category_id') || $errors->has('title') || $errors->has('description') )
            $('#addCategory').modal('show');
        @endif
    })
</script>
@endpush
