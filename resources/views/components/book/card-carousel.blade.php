@props([
   'book',
])
<div class="border border-primary rounded position-relative vesitable-item">
   <div class="vesitable-img">
      <img src="{{ asset(asset($book->img)) }}" class="img-fluid w-100 rounded-top" alt="">
   </div>
   <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
      <a href="/#category" rel="noopener noreferrer" class="text-white bg-primary">
         {{ $book->category_name }}
      </a>
   </div>
   <div class="p-4 rounded-bottom" style="height: 300px;">
      <h4>{{ $book->title }}</h4>
      <p>Author: {{ $book->author }}</p>
      <p>Publisher: {{ $book->publisher }}</p>
      <p>Publication Year: {{ $book->publication_year }}</p>
      <div class=" align-self-end d-flex justify-content-between flex-lg-wrap">
         <a href="{{ route('homepage.detail', $book->id) }}" class="btn border border-secondary rounded-pill px-3 text-primary">
            <i class="fas fa-book-reader me-2 text-primary"></i>
            View Detail
         </a>
      </div>
   </div>
</div>
