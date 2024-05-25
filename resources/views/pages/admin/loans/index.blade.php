@extends('layouts.admin.app')

@section('title', 'List Loan')

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
                <h6 class="mb-0">List of Loan</h6>
                <a href="{{ route('admin.loans.action', ["create", null]) }}"><i class="fas fa-plus"></i> Add Loan</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Loan Date</th>
                        <th scope="col">Return Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loans as $index => $loan)
                        <tr>
                            <td>{{ $index + 1}}</td>
                            <td>{{ $loan->username }}</td>
                            <td>{{ $loan->title }}</td>
                            <td>{{ $loan->loan_date }}</td>
                            <td>{{ $loan->return_date }}</td>
                            <td>{{ $loan->status }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.loans.action', ["detail", $loan->id] ) }}">
                                    Detail
                                </a>
                                <a class="btn btn-sm btn-secondary" href="{{ route('admin.loans.action', ["edit", $loan->id] ) }}">
                                    Update
                                </a>
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.loans.action', ["delete", $loan->id] ) }}">
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
