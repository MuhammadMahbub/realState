

@extends('backend.layouts.master')

@section('title','Admin Dashboard - Users')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">All Users</h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <div>
        <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add User</a>
        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            + Invite User
        </button>
    </div>
</div>
@endsection

@section('content')

<!-- White Box -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects style-1">
                <div class="tbl-caption">
                    <h4 class="heading mb-0">Users Listing</h4>
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
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $user->name ?? ''}}</td>
                            <td>{{ $user->email ?? ''}}</td>
                            <td>
                                @if ($user->role == 1)
                                    Admin
                                @elseif($user->role == 2)
                                    Agent
                                @elseif($user->role == 3)
                                    Tenant
                                @elseif($user->role == 4)
                                    Landlord
                                @elseif($user->role == 5)
                                    Contractor
                                @elseif($user->role == 2)
                                    Service Provider
                                @endif    
                            </td>
                            <td>
                                @if ($user->role != 1)
                                <input type="hidden" id="option__{{$user->id}}" value="{{$user->id}}">
                                <select class="select-opt p-1 optionChange" id="statusChange__{{$user->id}}">
                                    <option value="1" {{$user->status == 1 ? 'selected' : ''}}>Approve</option>
                                    <option value="0" {{$user->status == 0 ? 'selected' : ''}}>Pending</option>
                                </select>
                                @else
                                <select class="select-opt p-1">
                                    <option selected>Approve</option>
                                </select>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteUser{{ $user->id }}">Delete</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>

                        <!-- Users Delete Modal -->
                        @push('modals')
                        <div class="modal fade" id="deleteUser{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form action="{{ route('admin.user_destroy', $user->id) }}" method="POST">
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
                            $('#statusChange__{{$user->id}}').change(function(){
                                let status = $(this).val();
                                let user_id = $('#option__{{$user->id}}').val();
                                // alert(status);
                                $.ajax({
                                    url: "{{ route('approve_pending') }}",
                                    type: "POST",
                                    data: {
                                        user_id : user_id,
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
<!-- End of white box -->

@push('modals')
        <!-- Add Agents -->
    <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
        <div class="offcanvas-header">
        <h5 class="modal-title" id="#gridSystemModal">Add User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <form action="{{ route('register_agent') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput2" class="form-label">User Name<span class="text-danger">*</span></label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter Name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">User Email<span class="text-danger">*</span></label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput3" placeholder="abc@gmail.com">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
                            <input name="password" type="password" class="form-control" id="exampleFormControlInput4" placeholder="Enter Password">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput88" class="form-label">Mobile</label>
                            <input name="phone" type="number" class="form-control" id="exampleFormControlInput88" placeholder="Enter Phone Number">
                        </div>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="default-select form-control">
                                <option  data-display="Select">Please select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-xl-6 mt-2 mb-3">
                            <label class="form-label">Register<span class="text-danger">*</span></label>
                            <select name="role" id="select-Categories12" class="form-control form-select select2 br-tr-md-0 br-br-md-0">
                                <option selected value="">Register as*</option>
                                <option value="2">Agent</option>
                                <option value="3">Tenant</option>
                                <option value="4">Landlord</option>
                                <option value="5">Contractor</option>
                                <option value="6">Service Provider</option>
                            </select>
                        </div>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-xl-12 mb-3">
                            <label class="form-label">About<span class="text-danger">*</span></label>
                            <textarea rows="2" class="form-control"></textarea>
                        </div>	
                        @error('about')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div>
                        <button class="btn btn-primary me-1" type="submit">Submit</button>
                        <button class="btn btn-danger light ms-1">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        </div>		
        <!-- Add Agents End -->

        <!-- Invite New Agents -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Agent</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                        <div class="row">
                            <div class="col-xl-6">
                                <label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Surname">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 invite">
                            <label class="form-label">Send invitation email<span class="text-danger">*</span></label>
                            <input type ="email" class="form-control " placeholder="+ invite">
                        </div>
                    </div>
                </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Invite New Agent End -->
@endpush

@endsection



@push('scripts')
    
@endpush