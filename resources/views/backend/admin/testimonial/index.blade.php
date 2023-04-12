@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property Category')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Testimonial</h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="add-listing.html" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTestimonial">Add Testimonial</a>
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
                            <th>SL</th>
                            <th>Category</th>
                            <th>Rating</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $testimonial->name ?? '' }}</td>
                            <td>{{ $testimonial->rating ?? '' }}</td>
                            <td>{!! Str::limit($testimonial->description ?? '', 100,) !!}</td>
                            <td>
                                <img src="{{ asset($testimonial->image) }}" alt="" width="100">
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editTestimonial{{ $testimonial->id }}">Edit</a></li>
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteTestimonial{{ $testimonial->id }}">Delete</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>

                        {{-- testimonial Edit Modal --}}
                        @push('modals')
                        <div class="modal fade" id="editTestimonial{{ $testimonial->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Testimonial</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('testimonial.update',$testimonial->id) }}" method="post" class="form-group" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Name<span class="text-danger">*</span></label>
                                                <input type="text" value="{{ $testimonial->name }}" name="name"  class="form-control">  
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror  
                                            </div>

                                            <div class="form-group mt-2">
                                                <label for=""> Description<span class="text-danger">*</span></label>
                                                <textarea name="description"  id="editor__{{ $testimonial->id }}" class="form-control" cols="30" rows="5">{!! $testimonial->description !!}</textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror 
                                            </div>

                                            <label for="">Previous Image</label>
                                            <img src="{{ asset($testimonial->image) }}" alt="" width="100">
                                            <div class="form-group">
                                                <label>Image<span class="text-danger">*</span> </label>
                                                <input type="file" class="form-control" name="image" onchange="document.getElementById('image').src=window.URL.createObjectURL(this.files[0])"/>
                                                <img id="image" width="200">
                                            </div>
                                            @error('image')
                                                <span class="text-danger mt-2">{{ $message }}</span>
                                            @enderror 
                                            
                                            <div class="form-group">
                                                <label for="">Rating<span class="text-danger">*</span></label>
                                                <input type="number"  name="rating" value="{{ $testimonial->rating }}" placeholder="3" class="form-control">  
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
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
                        <!-- testimonial Delete Modal -->
                        @push('modals')
                        <div class="modal fade" id="deleteTestimonial{{ $testimonial->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
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
                                ClassicEditor
                                    .create( document.querySelector( '#editor__{{ $testimonial->id }}' ) )
                            </script>
                        @endpush

                        @endforeach
                        
                    </tbody>
        </table> 
    </div>
</div>
<!-- End of white box -->

@push('modals')
    <!-- Testimonial Add Modal -->
    <div class="modal fade" id="addTestimonial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Testimonial</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('testimonial.store') }}" method="post" class="form-group" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="">Name<span class="text-danger">*</span></label>
                            <input type="text"  name="name" placeholder="Name" class="form-control">  
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>  

                        <div class="form-group mt-2">
                            <label for="">Description<span class="text-danger">*</span></label>
                            <textarea name="description"  id="editor" class="form-control" cols="30" rows="5" placeholder="Short Description"></textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror 
                        </div> 

                        <div class="form-group mt-2">
                            <label>Image<span class="text-danger">*</span> </label>
                            <input type="file" class="form-control" name="image" onchange="document.getElementById('image').src=window.URL.createObjectURL(this.files[0])"/>
            
                            <img id="image" width="200">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror 
                        
                        <div class="form-group">
                            <label for="">Rating<span class="text-danger">*</span></label>
                            <input type="number"  name="rating" placeholder="3" class="form-control">  
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
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
        @if($errors->has('name') || $errors->has('image') || $errors->has('rating') || $errors->has('description') )
            $('#addTestimonial').modal('show');
        @endif
    })
</script>
@endpush

