@extends('layouts.admin.app')

@section('title', 'Create Book')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-end mb-4 gap-x-2">
                    <a href="{{ route('admin.books') }}" class="mx-2">
                        Books
                    </a>
                    /<span class="mx-2 text-capitalize">{{ $mode }}</span>
                </div>
                <h6 class="mb-4 text-capitalize"">{{ $mode }} Book</h6>
                <form action="{{ route('admin.books.store') }}" method="POST">
                    @csrf
                    <x-form-input :itemValue="$book" :item="['name' => 'title', 'label' => 'Title', 'mode' => $mode ]" />
                    <x-form-input :itemValue="$book" :item="['name' => 'author', 'label' => 'Author', 'mode' => $mode ]" />
                    <x-form-input :itemValue="$book" :item="['name' => 'publisher', 'label' => 'Publisher', 'mode' => $mode ]" />
                    <x-form-input :itemValue="$book" :item="['name' => 'publication_year', 'label' => 'Publication Year', 'mode' => $mode ]" />
                    <x-form-input :itemValue="$book" :item="['name' => 'status', 'label' => 'Status', 'mode' => $mode ]" />
    
                    @if ($mode != "detail")
                        <button type="submit" class="btn text-capitalize @if($mode == "delete") btn-danger @else btn-primary @endif">
                            {{ $mode }}
                        </button>
                    @endif
                </form>
            </div>
            <div class="col-sm-12 col-xl-6">
            </div>
        </div>
    </div>
    

@endsection
