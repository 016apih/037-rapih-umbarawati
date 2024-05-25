@extends('layouts.homepage.app')

@section('title', 'Detail - PemulaBooks')

@section('content')

<!-- Single Product Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">

        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-xl-6">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="border rounded">
                            <img src="{{ asset($book->img) }}" class="img-fluid rounded" alt="img" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-6">
                <div class="row g-4 fruite">
                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs mb-3">
                                <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                    id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                    aria-controls="nav-about" aria-selected="true"
                                >
                                    Description
                                </button>
                                {{-- <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                    id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                    aria-controls="nav-mission" aria-selected="false"
                                >
                                    Reviews
                                </button> --}}
                            </div>
                        </nav>
                        <div class="tab-content mb-5">
                            <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <h4 class="fw-bold mb-3">{{ $book->title }}</h4>
                                <div class="px-2">
                                    <div class="row g-4">
                                        <div class="col-10">
                                            <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Author</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">{{ $book->author }}</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center text-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Category</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">{{ $book->category_name }}</p>
                                                </div>
                                            </div>
                                            <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Publisher</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">{{ $book->publisher }}</p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Publication Year</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">{{ $book->publication_year }}</p>
                                                </div>
                                            </div>
                                            <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Status</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">{{ $book->status }}</p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Book owner</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">{{ $book->username }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Jason Smith</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                            words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Sam Peters</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                            words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-vision" role="tabpanel">
                                <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. 3</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid vesitable">
            <div class="container py-2">
                <h1 class="fw-bold mb-0">Related books category</h1>
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    @foreach ($books as $item)
                        @if ($item->category_name == $book->category_name)
                            <x-book.card-carousel :book="$item" />
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product End -->

@endsection
