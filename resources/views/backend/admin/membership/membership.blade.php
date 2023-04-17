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
                        @if($members->package_name == "weekly" && $members->membership_status == 'on')
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#cancelPayment">Cancel Membership</a>
                        @else
                            <button type="button"  data-bs-toggle="modal" data-bs-target="#weeklyPaymentMethod"  class="btn btn-success" >Buy Now</button>
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
                    @if ($members)
                        @if ($members->package_name == "monthly" && $members->membership_status == 'on')
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#cancelPayment">Cancel Membership</a>
                        @else
                            <button type="button"  data-bs-toggle="modal" data-bs-target="#monthlyPaymentMethod"  class="btn btn-success" >Buy Now</button>
                        @endif
                    @else
                        <button type="button"  data-bs-toggle="modal" data-bs-target="#monthlyPaymentMethod"  class="btn btn-success" >Buy Now</button>
                    @endif 
                </div>
            </div>
            <div class="col-md-4">
                <div class="card P-3">
                    <div class="card-body">
                        <h2>Yearly Plan / (300 USD)</h2>
                    </div>
                    @if ($members)
                        @if ($members->package_name == "yearly" && $members->membership_status == 'on')
                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#cancelPayment">Cancel Membership</a>
                        @else
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#yearlyPaymentMethod" >Buy Now</button>
                        @endif
                    @else
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#yearlyPaymentMethod" >Buy Now</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- {{ route('cancel.membership') }} --}}

@push('modals')
{{-- cancel payment  --}}
<div class="modal fade" id="cancelPayment" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body text-center">
                <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                <h3 class="h4 mb-2 mt-3">Warning</h3>
                <strong class="card-text text-red">Once Cancel, Your Package Will be Cancelled!</strong>
            </div>
            <div class="modal-footer">
                <div class="text-center w-100">
                    <a href="{{ route('cancel.membership') }}" class="btn btn-danger"> Cancel </a>
                </div> 
            </div>
        </div>
    </div>
</div>

{{-- weekly payment modals --}}
<div class="modal fade" id="weeklyPaymentMethod" tabindex="-1" aria-labelledby="weeklyPaymentMethod" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if ($members)
                @if ($members->membership_status == 'on')
                <div class="card-body text-center">
                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                    <h3 class="h4 mb-2 mt-3">Warning</h3>
                    <strong class="card-text text-red">Once Purchage, Your Previous Package Will be Cancelled!</strong>
                </div>
                @endif
            @endif
            <div class="modal-body text-center">
                <h2>Weekly Membership</h2>
                <h2>100 USD</h2>
            </div>
            <div class="modal-footer"> 
                <div class="text-center w-100">
                    <a href="{{ route('weeklySubscription') }}" class="btn btn-success"> Purchase Now</a>
                </div>
            </div>
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
            @if ($members)
                @if ($members->membership_status == 'on')
                <div class="card-body text-center">
                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                    <h3 class="h4 mb-2 mt-3">Warning</h3>
                    <strong class="card-text text-red">Once Purchage, Your Previous Package Will be Cancelled!</strong>
                </div>
                @endif
            @endif
            <div class="modal-body text-center">
                <h2>Monthly Membership</h2>
                <h2>200 USD</h2>
            </div>
            <div class="modal-footer"> 
                <div class="text-center w-100">
                    <a href="{{ route('monthlySubscription') }}" class="btn btn-success"> Purchase Now </a>
                </div>
            </div>
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
            @if ($members)
                @if ($members->membership_status == 'on')
                <div class="card-body text-center">
                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                    <h3 class="h4 mb-2 mt-3">Warning</h3>
                    <strong class="card-text text-red">Once Purchage, Your Previous Package Will be Cancelled!</strong>
                </div>
                @endif
            @endif
            <div class="modal-body text-center">
                <h2>Yearly Membership</h2>
                <h2>300 USD</h2>
            </div>
            <div class="modal-footer">
                <div class="text-center w-100">
                    <a href="{{ route('yearlySubscription') }}" class="btn btn-success"> Purchase Now </a>
                </div> 
            </div>
        </div>
    </div>
</div>
@endpush
 


@push('scripts') 

@endpush

