@extends('backend.layouts.master')

@section('title','Admin Dashboard - Membership')

@section('breadcrumb')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Membership</h5></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card P-3">
                    <div class="card-body">
                        <h2>Weekly Plan / (100 USD)</h2>
                    </div>
                    @if ($members)
                        @if($members->membership_status == "on")
                            <a class="btn btn-danger" href="{{ route('cancel.membership') }}">Cancel Membership</a>
                        @endif
                    @else
                        <button type="button"  data-bs-toggle="modal" data-bs-target="#weeklyPaymentMethod"  class="btn btn-success" >Buy Now</button>
                    @endif

                </div>
            </div>
            <div class="col-md-4">
                <div class="card P-3">
                    <div class="card-body">
                        <h2>Monthly Plan / (200 USD)</h2>
                    </div> 
                    {{-- @if ($members->membership_status == "on")
                        <a class="btn btn-danger" href="{{ route('cancel.membership') }}">Cancel Membership</a>
                    @else
                        <button type="button"  data-bs-toggle="modal" data-bs-target="#monthlyPaymentMethod"  class="btn btn-success" >Buy Now</button>
                    @endif --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card P-3">
                    <div class="card-body">
                        <h2>Yearly Plan / (300 USD)</h2>
                    </div>
                    {{-- @if ($members->membership_status == "on")
                        <a class="btn btn-danger" href="{{ route('cancel.membership') }}">Cancel Membership</a>
                    @else
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#yearlyPaymentMethod" >Buy Now</button>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
@endsection


@push('modals')

{{-- weekly payment modals --}}
<div class="modal fade" id="weeklyPaymentMethod" tabindex="-1" aria-labelledby="weeklyPaymentMethod" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" class="form-group" >
                <div class="modal-body">
                    <h2>Weekly Membership</h2>
                    <h2>100 USD</h2>
                </div>
                <div class="modal-footer"> 
                    <div class="text-center w-100">
                        <a href="{{ route('weeklySubscription') }}" class="btn btn-success"> Purchase Now</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- monthly payment modals --}}
<div class="modal fade" id="monthlyPaymentMethod" tabindex="-1" aria-labelledby="monthlyPaymentMethod" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" class="form-group" >
                <div class="modal-body">
                    <h2>Monthly Membership</h2>
                    <h2>200 USD</h2>
                </div>
                <div class="modal-footer"> 
                    <div class="text-center w-100">
                        <a href="{{ route('monthlySubscription') }}" class="btn btn-success"> Purchase Now </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- yearly payment modals --}}
<div class="modal fade" id="yearlyPaymentMethod" tabindex="-1" aria-labelledby="yearlyPaymentMethod" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" class="form-group" >
                <div class="modal-body">
                    <h2>Yearly Membership</h2>
                    <h2>300 USD</h2>
                </div>
                <div class="modal-footer">
                    <div class="text-center w-100">
                        <a href="{{ route('yearlySubscription') }}" class="btn btn-success"> Purchase Now </a>
                    </div> 
                </div>
            </form>
        </div>
    </div>
</div>
@endpush
 


@push('scripts') 

@endpush

