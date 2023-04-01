@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property')

@section('breadcrumb')
<div class="row">
    <div class="col-lg-10">
        <h4><strong>Welcome Back, {{ Auth::user()->name ?? 'N/A' }}</strong></h4>
        <p>Lorem ipsum c'iest paris du saint germain.</p>
    </div>
    <div class="col-lg-2">
        <div class="text-right">
        <a href="{{ route('property.create') }}" class="btn btn-primary"><i class="fa fa-building"></i> Add New Property</a>
        </div>
    </div>
</div>
@endsection

@section('content')

 <!-- White Box -->
 <div class="white-box">
    <h5>List Of All Properties</h5>
    <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
        <select class="form-select shadow-none row border-top">
            <option>View All</option>
            <option>Function 1</option>
            <option>Function 2</option>
            <option>Function 3</option>
        </select>
    </div>
    <br/>
    <!-- Table with the list of all Tenants -->  
    <div id="agents">
        <table class="table table-striped">
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
                        <input type="hidden" id="option__{{$user->id}}" value="{{$user->id}}">
                        <select class="select-opt p-1 optionChange" id="statusChange__{{$user->id}}">
                          <option value="1" {{$user->status == 1 ? 'selected' : ''}}>Approve</option>
                          <option value="0" {{$user->status == 0 ? 'selected' : ''}}>Pending</option>
                        </select>
                      </td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#deleteUser{{ $user->id }}" class="btn btn-danger">Delete</a>
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
                        // alert(product_id);
                        $.ajax({
                            url: "{{ route('approve_pending') }}",
                            type: "POST",
                            data: {
                                user_id : user_id,
                                status : status,
                            },
                            success: function(data){
                                toastr.success('Status Updated')
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
<!-- End of white box -->


@endsection