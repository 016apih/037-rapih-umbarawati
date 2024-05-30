@extends('layouts.admin.app')

@section('title', 'List Book')

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
                <h6 class="mb-0">List of Book</h6>
                <a href="{{ route('admin.books.action', ["create", null]) }}"><i class="fas fa-plus"></i> Add Book</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">ID</th>
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
                    @foreach ($books as $index=>$book)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->category_name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->publication_year }}</td>
                            <td>
                                @if($book->status == 'available')
                                    <x-badge :item="['type' => 'bg-success', 'title' => $book->status ]" />
                                @else
                                    <x-badge :item="['type' => 'bg-secondary', 'title' => $book->status ]" />
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.books.action', ["detail", $book->id] ) }}">
                                    Detail
                                </a>
                                <a class="btn btn-sm btn-secondary" href="{{ route('admin.books.action', ["edit", $book->id] ) }}">
                                    Update
                                </a>
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.books.action', ["delete", $book->id] ) }}">
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
