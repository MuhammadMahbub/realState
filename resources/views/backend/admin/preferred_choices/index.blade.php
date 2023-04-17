@extends('backend.layouts.master')

@section('title','Admin Dashboard - Property')

@section('breadcrumb')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Property </h5></li>
    </ol>
    <a href="payments.html" class="btn btn-primary btn-sm">Wallet Ballance: $500</a>
    <a href="{{ route('preferred_choices.create') }}" class="btn btn-primary btn-sm">Add Content</a>
</div>
@endsection
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects style-1">
            <div class="tbl-caption">
            </div>
                <table id="empoloyees-tblwrapper" class="table">
                    <thead>
                        <tr>
                            <th>Icon Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($preferred_choices  as $preferred_choice)
                        <tr>
                            <td>
                                {{ $preferred_choice->icon_name }}
                            </td>
                            <td>{{ $preferred_choice->title }}</td>
                            <td>{{ $preferred_choice->description }}</td>  
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
                                      <li><a class="dropdown-item" href="{{ route('preferred_choices.edit', $preferred_choice->id) }}">Edit</a></li>
                                      <li><a class="dropdown-item" href="{{ route('preferred_choices.delete', $preferred_choice->id) }}" >Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <!-- Property Delete Modal -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection