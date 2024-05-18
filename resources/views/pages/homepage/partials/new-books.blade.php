<!-- new books Start-->
<div class="container-fluid vesitable py-3">
    <div class="container py-5">
        <h1 class="mb-0">New Books</h1>
        <div class="owl-carousel vegetable-carousel justify-content-center">
            @foreach ($books as $book)
                <x-book.card-carousel :book="$book" />
            @endforeach
        </div>
    </div>
</div>
<!-- new books End -->
