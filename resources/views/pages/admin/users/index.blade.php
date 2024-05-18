@extends('layouts.admin.app')

@section('title', 'List Users')

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
                <h6 class="mb-0">List of User</h6>
                <a href="{{ route('admin.users.action', "create") }}"><i class="fas fa-plus"></i> Add User</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Handphone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>{{ $user['username'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['role_name'] }}</td>
                            <td>{{ $user['no_hp'] }}</td>
                            <td>{{ $user['address'] }}</td>
                            <td>{{ $user['created_at'] }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.users.action', ["detail", $user['id']] ) }}">
                                    Detail
                                </a>
                                <a class="btn btn-sm btn-secondary" href="{{ route('admin.users.action', ["update", $user['id']] ) }}">
                                    Update
                                </a>
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.users.action', ["delete", $user['id']] ) }}">
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
