@extends('layouts.homepage.app')

@section('title', 'View More - PemulaBooks')

@section('content')

<!-- Table Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        
        <form id='searchForm' action="{{ route('homepage.search') }}" method="GET">
            <div class="d-flex align-items-center py-5">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="text" name="keyword" id="keywordMore" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1"
                        @if($keyword != null ) value="{{ $keyword }}" @endif
                        onfocus="this.select()"
                    >
                    @if($keyword != null )
                        <button onclick="resetForm()" id="search-icon-1" class="input-group-text p-3">
                            <i class="fas fa-times"></i>
                        </button>
                    @endif
                    <button type="submit" id="search-icon-1" class="input-group-text p-3">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Publication Year</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($books) > 0)
                        @foreach ($books as $book)
                            <tr>
                                <td>
                                    <p class="mb-0 mt-4">{{ $book->title }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $book->author }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $book->category_name }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $book->publisher }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $book->publication_year }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ $book->status }}</p>
                                </td>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $book->img }}" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">
                                <p class="my-2 text-center">Books nof found</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<!-- Table Page End -->

@endsection
