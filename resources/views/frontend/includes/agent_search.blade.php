
User/Agents::: 
@foreach ($all_agents as $item)
    {{ $item }}
@endforeach

<div class="card-body">
    <div class="user-tabel table-responsive">
        <table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
            <tbody>
                <tr>
                    <th >Profile Picture</th>
                    <th>Name</th>
                    <th>Membership Status</th>
                    <th>Member Since</th>
                    <th>View Agent</th>
                </tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/female/16.jpg"></span></td>
                    <td><a href="userprofile.html" class="text-dark">Mary Butler</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-info">Paused</a></td>
                    <td>November-29-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/female/27.jpg"></span></td>
                    <td><a href="userprofile.html" class="text-dark">Janice Lane</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-success">Active</a></td>
                    <td>November-25-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/male/26.jpg"></span></td>
                    <td><a href="userprofile.html" class="text-dark">Anthony Miller</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-info">Pasused</a></td>
                    <td>November-24-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/female/9.jpg"></span></td>
                    <td><a href="userprofile.html" class="text-dark">Denise Elliott</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-success">Active</a></td>
                    <td>November-21-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/female/16.jpg"></span></td>
                    <td><a href="userprofile.html" class="text-dark">Rose Cook</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-danger">Blocked</a></td>
                    <td>November-15-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/male/17.jpg"></span></td>
                    <td><a href="userprofile.html" class="text-dark">Terry Tucker</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-success">Active,paused</a></td>
                    <td>November-14-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/female/6.jpg"></span></td>
                    <td><a href="userprofile.html" class="text-dark">Grace Knight</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-success">Active</a></td>
                    <td>November-11-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><span class="avatar avatar-md  d-block brround cover-image" data-bs-image-src="{{asset('frontend')}}/assets/images/faces/female/26.jpg" ></span></td>
                    <td><a href="userprofile.html" class="text-dark">Elizabeth Martin</a></td>
                    <td><a href="javascript:void(0);" class="badge badge-success">Active,paused</a></td>
                    <td>November-05-2019</td>
                    <td>
                        <a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>