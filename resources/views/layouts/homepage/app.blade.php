<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('./assets/homepage/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('./assets/homepage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('./assets/homepage/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('./assets/homepage/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <x-spinner />


        @include('layouts.homepage.header')


        @include('layouts.homepage.modal-search')


        <main>
            @yield('content')
        </main>
        

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4 bottom-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center text-md-center mb-3 mb-md-0">
                        <span class="text-light">
                            <a href="#"><i class="fas fa-copyright text-light me-2"></i>pemulaBooks</a>, @2024
                        </span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('./assets/homepage/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('./assets/homepage/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('./assets/homepage/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('./assets/homepage/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('./assets/homepage/js/main.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const links = document.querySelectorAll('.nav-link');
                const currentHash = window.location.hash;

                links.forEach(link => {
                    if (link.getAttribute('href') === currentHash) {
                        link.classList.add('active');
                    }
                });

                window.addEventListener('hashchange', function () {
                    const newHash = window.location.hash;
                
                    links.forEach(link => {
                    if (link.getAttribute('href') === newHash) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                    });
                });

                
            });
            // resetForm Search
            function resetForm() {
                document.getElementById('keywordMore').value = '';
                document.getElementById('searchForm').submit();
            }
        </script>
    </body>

</html>
