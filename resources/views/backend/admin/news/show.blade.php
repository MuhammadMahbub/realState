@extends('backend.layouts.master')

@section('title','Admin Dashboard - News')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">News </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="{{ route('news.index') }}" class="btn btn-primary btn-sm"> <i data-feather="arrow-left"></i> Back</a>
</div>
@endsection

@section('content')

 <!-- White Box -->
 <div class="card">
    
    <!-- Table with the list of all Tenants -->  
    <div class="my-4 ">
        <table class="table table-bordered table-fixed">
            
            <tbody>       
                 <tr class="mt-5">
                    <th >Title</th>
                    <td>{{ $news->title ?? ''}}</td>
                </tr>
                <tr>
                    <th>Category Name</th>
                    <td>{{ $news->relationwithNewsCategory->category_name ?? ''}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td class="">
                        <span class="wrap__text">{!! $news->description !!}</span>
                    </td>
                </tr>
                <tr>
                    <th>Favourite Count</th>
                    <td>
                        {{ $news->favourite_count ?? ''}}
                    </td>
                </tr>
                <tr>
                    <th>Like Count</th>
                    <td>
                        {{ $news->like_count ?? ''}}
                    </td>
                </tr>
            </tbody>
        </table> 
    </div>
</div>
<!-- End of white box -->


@endsection