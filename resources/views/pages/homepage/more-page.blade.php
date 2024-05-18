@extends('layouts.homepage.app')

@section('title', 'View More - PemulaBooks')

@section('content')

<!-- Table Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        
        <div class="d-flex align-items-center py-5">
            <div class="input-group w-75 mx-auto d-flex">
                <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Publication Year</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>
                                <p class="mb-0 mt-4">{{ $book['title'] }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">{{ $book['author'] }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">{{ $book['category_name'] }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">{{ $book['publisher'] }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">{{ $book['publication_year'] }}</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">{{ $book['status'] }}</p>
                            </td>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="./assets/img/{{ $book['img'] }}.jpg" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<!-- Table Page End -->

@endsection
