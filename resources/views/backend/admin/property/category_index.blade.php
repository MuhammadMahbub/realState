@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property Category')

@section('breadcrumb')

    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Property Category</h5></li>
        </ol>
        <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
        <a href="add-listing.html" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCategory">Add Category</a>
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
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td><span>{{ $loop->index + 1 }}</span></td>
                            <td>
                                <span>{{ $category->category_name ?? '' }}</span>
                            </td>
                            <td>
                                <img src="{{ asset($category->image ?? '') }}" alt="" width="150">
                            </td>
                            <td>
                                <span>{{ $category->property_qty ?? '' }}</span>
                            </td>
                            <td>
                                <span>{{!! $category->description ?? '' !!}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editCategory{{ $category->id }}">Edit</a></li>
                                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteCategory{{ $category->id }}">Delete</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>

                        <!-- Category Edit Modal -->
                        @push('modals')
                            <div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Property Category</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('property_category.update',$category->id) }}" method="post" class="form-group" enctype="multipart/form-data">
                                            @csrf
                                            @method("PUT")
                                            <div class="modal-body">
                                                <label for="" class="mt-2">Property Category<span class="text-danget">*</span></label>
                                                <input type="text" value="{{ $category->category_name }}" name="category_name" placeholder="Rent / Sale" class="form-control">  
                                                @error('category_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror  

                                                <div class="form-group">
                                                    <label class="mt-2">Previous Image </label><br>
                                                    
                                                    <img src="{{ asset($category->image) }}" width="200" class="mt-2">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-2"> Image <span class="text-danget">*</span></label>
                                                    <input type="file" class="form-control" name="image" onchange="document.getElementById('thumbnail_image__{{ $category->id }}').src=window.URL.createObjectURL(this.files[0])"/>
                                    
                                                    <img id="thumbnail_image__{{ $category->id }}" width="200" class="mt-2">
                                                </div>
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                                <label class="mt-2" for="">Category Quantity</label>
                                                <input type="number" name="property_qty" value="{{ $category->property_qty }}" class="form-control">

                                                <label class="mt-2" for="">Short description<span class="text-danget">*</span></label>
                                                <textarea name="description"  id="editor__{{ $category->id }}" class="form-control" cols="30" rows="5" placeholder="Short Description">{{ $category->description }}</textarea>
                                                @error('description')
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

                        <!-- Category Delete Modal -->
                        @push('modals')
                        <div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form action="{{ route('property_category.destroy', $category->id) }}" method="POST">
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
                                .create( document.querySelector( '#editor__{{ $category->id }}' ) )
                        </script>
                        @endpush
                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>



@push('modals')
    <!-- Category Add Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Property Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('property_category.store') }}" method="post" class="form-group" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <label for="">Property Category<span class="text-danget">*</span></label>
                        <input type="text"  name="category_name" placeholder="Rent / Sale" class="form-control">  
                        @error('category_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror  

                        <div class="form-group mt-3">
                            <label> Image <span class="text-danget">*</span></label>
                            <input type="file" class="form-control" name="image" onchange="document.getElementById('thumbnail_image').src=window.URL.createObjectURL(this.files[0])"/>
            
                            <img id="thumbnail_image" width="200" class="mt-2">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <label for="" class="mt-3">Category Quantity</label>
                        <input type="number" name="property_qty" class="form-control">

                        <label for="" class="mt-3">Short description<span class="text-danget">*</span></label>
                        <textarea name="description"  id="editor" class="form-control" cols="30" rows="5" placeholder="Short Description"></textarea>
                        @error('description')
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
        @if($errors->has('category_name') || $errors->has('description') )
            $('#addCategory').modal('show');
        @endif
    })
</script>
@endpush

