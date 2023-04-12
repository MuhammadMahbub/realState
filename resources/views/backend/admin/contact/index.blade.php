@extends('backend.layouts.master')

@section('title','Admin Dashboard - Contact')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Contact </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    {{-- <a href="{{ route('property.index') }}" class="btn btn-primary btn-sm"> <i data-feather="arrow-left"></i> Back</a> --}}
</div>
@endsection

@section('content')

    <div class="card">
        <form action="{{ route('contact.update', $contact->id) }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group mt-2">
                <label for="">Mail<span class="text-danger">*</span></label>
                <input type="email" value="{{ $contact->mail }}" name="mail" placeholder="Email" class="form-control">  
                @error('mail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Address<span class="text-danger">*</span></label>
                <input type="text" value="{{ $contact->address }}" name="address" placeholder="Address" class="form-control">  
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Mobile<span class="text-danger">*</span></label>
                <input type="text" value="{{ $contact->mobile }}" name="mobile" placeholder="+0081232...." class="form-control">  
                @error('mobile')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="">Phone<span class="text-danger">*</span></label>
                <input type="text" value="{{ $contact->phone }}" name="phone" placeholder="+0081232...." class="form-control">  
                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-4">  
                <label>Social Links</label>
                @if ($contact->social_links)
                    @foreach (json_decode($contact->social_links) as $link)
                        <div class="row main-div mt-2">
                            <div class="col-md-10">
                                <input type="text" value="{{ $link }}" name="social_links[]"  placeholder="https://www.youtube.com/" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <button type="button"  class="remove_btn">&times;</button>
                            </div>
                        </div>  
                    @endforeach
                @endif
                
                <div class="new_data"></div>
                <div class="btn btn-info mt-2 mb-2 add_btn" id="">Add</div>
                @error('social_links')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
        
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $(".add_btn").click(function(){
            let data = `
                <div class="row main-div mt-2 ">
                    <div class="col-md-10">
                        <input type="text" name="social_links[]"  placeholder="https://www.youtube.com/" class="form-control">
                    </div>
                    
                    <div class="col-md-2">
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

@endpush