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
                <form
                    @if ($mode != 'detail')
                        action="{{ route('admin.books.'.$mode, $book == null ? null : $book->id) }}"
                    @endif
                    method="POST"
                >
                    @csrf
                    @if ($book != null)
                        @if ($mode == 'edit')
                            @method('PUT')
                        @else
                            @method('DELETE')
                        @endif
                    @endif
                    <x-form-select
                        :item="[
                            'mode' => $mode,
                            'name' => 'category_id',
                            'label' => 'Category',
                            'value' => $book == null ? '' :  $book->category_id,
                            'options' => $categories
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'title',
                            'label' => 'Title',
                            'value' => $book == null ? '' :  $book->title,
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'author',
                            'label' => 'Author',
                            'value' => $book == null ? '' :  $book->author,
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'publisher',
                            'label' => 'Publisher',
                            'value' => $book == null ? '' :  $book->publisher,
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'publication_year',
                            'label' => 'Publication Year',
                            'value' => $book == null ? '' :  $book->publication_year,
                        ]"
                    />
                    <x-form-select
                        :item="[
                            'mode' => $mode,
                            'name' => 'status',
                            'label' => 'Status',
                            'value' => $book == null ? '' :  $book->status,
                            'options' => [
                                (object)['id' => 'available', 'name' => 'Available'],
                                (object)['id' => 'borrowed', 'name' => 'Borrowed']
                            ]
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'img',
                            'label' => 'Image',
                            'value' => $book == null ? '' :  $book->img,
                        ]"
                    />
    
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
