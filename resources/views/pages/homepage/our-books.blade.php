 <!-- Our Books Start-->
 <div class="container-fluid fruite py-5">
    <div class="container py-5">
        <div class="tab-class text-center">
            <div class="row g-4">
                <div class="col-lg-4 text-start">
                    <h1>Our Books</h1>
                </div>
                <div class="col-lg-8 text-end">
                    <ul class="nav nav-pills d-inline-flex text-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 130px;">All Books</span>
                            </a>
                        </li>
                        @foreach ($categories as $index => $product)
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-{{ $index + 2 }}">
                                    <span class="text-dark" style="width: 130px;">{{ $product['name'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                @foreach ($books as $book)
                                    <x-book.card :book="$book" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($categories as $index => $category)
                    <div id="tab-{{ $index + 2 }}" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($books as $book)
                                        @if ($book['category_name'] == $category['name'])
                                        {{ $book['category_name'] }}
                                            <x-book.card :book="$book" />
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Our Books End-->
