<!-- Category -->
<section id="category">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Category Book</h1>
                    <p>Book categories will help you find book patterns that you like.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($categories as $category)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fas fa-book-open text-secondary"></i>
                                <h4>{{ $category['name'] }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category -->
