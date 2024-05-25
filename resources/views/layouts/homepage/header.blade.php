<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="/" class="navbar-brand"><h1 class="text-primary display-6">PemulaBooks</h1></a>
            <button class="navbar-toggler py-2 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/#category" class="nav-item nav-link">Category</a>
                    <a href="/#about-us" class="nav-item nav-link">About Us</a>
                </div>
                <div class="d-flex m-3 me-0">
                    {{-- <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button> --}}
                    <button class="btn-search btn border border-secondary px-4 btn-xl-square rounded-md bg-white me-4">
                        <a href="{{ route('auth.loginPage') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            Login
                        </a>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
