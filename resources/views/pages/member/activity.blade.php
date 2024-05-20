@extends('layouts.admin.app')

@section('title', 'Activity')

@section('content')

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Loan Acivity</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Loan Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Return Date</th>
                            <th scope="col">Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actiities as $activity)
                            <tr>
                                <td>{{ $activity['loan_date'] }}</td>
                                <td>{{ $activity['book']['title'] }}</td>
                                <td>{{ $activity['book']['category_name'] }}</td>
                                <td>{{ $activity['status'] }}</td>
                                <td>{{ $activity['return_date'] }}</td>
                                <td>{{ $activity['loan_time']  }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection
