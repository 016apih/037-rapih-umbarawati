@props([
    'book',
])
<div class="col-md-6 col-lg-4 col-xl-3">
    <div class="rounded position-relative fruite-item">
        <div class="fruite-img">
            <img src="{{ asset('./assets/img/'.$book['img'].'.jpg') }}" class="img-fluid w-100 rounded-top" alt={{ $book['title'] }} >
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
            <a href="/#category" rel="noopener noreferrer" class="text-white bg-secondary">
                {{ $book['category_name'] }}
            </a>
        </div>
        <div class="p-4 border border-secondary border-top-0 rounded-bottom" style="height: 265px;">
            <h4>{{ $book['title'] }} </h4>
            <p>
                Author: {{ $book['author'] }}
                Publisher: {{ $book['publisher'] }}
                Publication Year: {{ $book['publication_year'] }}
            </p>
            <div class="d-flex justify-content-between flex-lg-wrap">
                <a href="{{ route('homepage.detail', $book['id']) }}" class="btn border border-secondary rounded-pill px-3 text-primary">
                    <i class="fas fa-book-reader"></i> View Detail
                </a>
            </div>
        </div>
    </div>
</div>
