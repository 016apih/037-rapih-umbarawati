@extends('layouts.admin.app')

@section('title', 'List Roles')

@section('content')

    @if ($msg != '')
        <div class="alert alert-info alert-dismissible fade show mt-4 mx-4" role="alert" style=" z-index: 99; position: fixed;
            align-items: center;
            justify-content: center;
            widht:100%;
            transition: 0.5s;
            display: flex;"
        >
            <i class="fa fa-exclamation-circle me-2"></i> {{ $msg }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">List of Role</h6>
                <a href="{{ route('admin.roles.action', ["create", null]) }}"><i class="fas fa-plus"></i> Add Role</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role['id'] }}</td>
                            <td>{{ $role['name'] }}</td>
                            <td>{{ $role['created_at'] }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.roles.action', ["detail", $role['id']] ) }}">
                                    Detail
                                </a>
                                <a class="btn btn-sm btn-secondary" href="{{ route('admin.roles.action', ["update", $role['id']] ) }}">
                                    Update
                                </a>
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.roles.action', ["delete", $role['id']] ) }}">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection
