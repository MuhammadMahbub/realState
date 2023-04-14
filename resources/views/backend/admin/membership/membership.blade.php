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
                        <h2>Weekly Plan</h2>
                    </div>
                    <a class="btn btn-success" href="#">Buy Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card P-3">
                    <div class="card-body">
                        <h2>Monthly Plan</h2>
                    </div>
                    <a class="btn btn-success" href="#">Buy Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card P-3">
                    <div class="card-body">
                        <h2>Yearly Plan</h2>
                    </div>
                    <a class="btn btn-success" href="#">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts') 
@endpush

