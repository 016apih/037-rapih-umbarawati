@extends('layouts.admin.app')

@section('title', 'Loans')

@section('content')

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Loan Acivity</h6>
                {{-- <a href="">Show All</a> --}}
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Author</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Year</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/'.$book->img) }}" class="img-fluid rounded-circle" style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-2">{{ $book->title }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-2">{{ $book->author }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-2">{{ $book->category_name }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-2">{{ $book->publisher }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-2">{{ $book->publication_year }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-2">{{ $book->status }}</p>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary mb-0 mt-2" href="#">
                                    Borrow
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
