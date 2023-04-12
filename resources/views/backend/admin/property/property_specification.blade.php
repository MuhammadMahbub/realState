@extends('backend.layouts.master')

@section('title','Admin Dashboard - Specification')

@section('breadcrumb')

    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Specification</h5></li>
        </ol>
        <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
        <a href="add-listing.html" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addSpecification">Add Specification</a>
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
                <h4 class="heading mb-0">Specification Listing</h4>
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
        </div>
        <div class="card-body ml-5">   
            @foreach ($properties as $property)
                <h4>{{ $property->short_title }}</h4>
                @forelse ($property->relationwithPropertySpecification as $specification)
                    <div class="row">
                        <div class="col-6">{!! $specification->icon !!}</div>
                        <div class="col-6">{{ $specification->specification }}</div>
                    </div>
                @empty
                    <span class="text-warning">No Specifications</span>
                @endforelse
                
                <div class="mt-4">
                    <a class="btn btn-primary btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#editSpecification{{ $property->id }}">Edit</a>
                </div>
                <hr>

                {{-- Specification Edit Modal --}}
                @push('modals')
                <div class="modal fade" id="editSpecification{{ $property->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Property Specification</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('property_specification.update', $property->id) }}" method="post" class="form-group" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Property Type <span class="text-danger">*</span></label><br>
                                        <h4>{{ $property->short_title }}</h4>
                                        <input type="hidden" value="{{ $property->id }}" name="property_id">
                                    </div>
                    
                                    <div class="form-group">  
                                        <label>Specification</label>
                                        @foreach ($property->relationwithPropertySpecification as $specification)
                                            <div class="row main-div mt-2">
                                                <div class="col-md-6">
                                                    <input type="text" name="icon[]" value="{{ $specification->icon }}"  placeholder="<i class='fa fa-bath text-muted'></i>" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" name="specification[]" value="{{ $specification->specification }}"  placeholder="Specification" class="form-control">
                                                </div>
                                                <div class="col-md-1 mt-2">
                                                    <button type="button"  class="remove_btn">&times;</button>
                                                </div>
                                            </div> 
                                            @error('specification')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        @endforeach
                                        <div class="new_data mb-2"></div>
                                        <div class="btn btn-info mb-2 add_btn" id="">Add</div>
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

            @endforeach
        </div>
    </div>
</div>



@push('modals')
    <!-- Specification Add Modal -->
    <div class="modal fade" id="addSpecification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Property Specification</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('property_specification.store') }}" method="post" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for=""> Property<span class="text-danger">*</span> </label>
                            <select name="property_id" id="" class="form-control">
                                <option value selected>--select one--</option>
                                @foreach ($properties as $property)
                                    <option value="{{ $property->id }}">{{ $property->short_title }}</option>
                                @endforeach    
                            </select>  
                            @error('property_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
            
                        <div class="form-group mt-4">  
                            <label>Add Specifications</label>
                            <div class="row main-div mt-2">
                                <div class="col-md-6">
                                    <label for="icon">Icon <span class="text-danger">*</span></label>
                                    <input type="text" name="icon[]"  placeholder="<i class='fa fa-bath text-muted'></i>" class="form-control">
                                </div>
                                <div class="col-md-5">
                                    <label for="icon">Specification <span class="text-danger">*</span></label>
                                    <input type="text" name="specification[]"  placeholder="Specification" class="form-control">
                                </div>
                                <div class="col-md-1 mt-4">
                                    <button type="button"  class="remove_btn">&times;</button>
                                </div>
                            </div> 
                        
                            <div class="new_data"></div>
                            <div class="btn btn-info mt-2 mb-2 add_btn" id="">Add</div>
                            @error('specification')
                                <span class="text-danger">{{ $message }}</span>
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

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $(".add_btn").click(function(){
            let data = `
                <div class="row main-div mt-2 ">
                    <div class="col-md-6">
                        <input type="text" name="icon[]"  placeholder="<i class='fa fa-bath text-muted'></i>" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="specification[]"  placeholder="Specification" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <button type="button"  class="remove_btn">&times;</button>
                    </div>
                </div> 
            `;
            $(".new_data").append(data);
        })

        $(document).on('click', '.remove_btn', function(){
            $(this).closest(".main-div").remove();
        }) 
    })
</script>

<script>
    $(document).ready(function(){
        @if($errors->has('property_id') || $errors->has('specification') )
            $('#addSpecification').modal('show');
        @endif
    })
</script>
@endpush
