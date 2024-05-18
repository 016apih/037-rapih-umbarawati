@extends('layouts.homepage.app')

@section('title', 'Login - PemulaBooks')

@section('content')

<!-- Form Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="p-5 bg-light rounded">
            <div class="row g-4 justify-content-center">
                <div class="col-12">
                    <div class="text-center mx-auto" style="max-width: 700px;">
                        <h1 class="text-primary">Login</h1>
                        <p class="mb-3">
                            Logging in as a member can help you borrow our books.<br/>
                            Book borrowing is only carried out in the area around the book owner.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <span class="italic text-danger text-lowercase">{{ $error }}</span>
                        @endforeach
                    @endif

                    <form action="{{ route('show') }}" method="POST">
                        @csrf
                        <input type="email" name="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email"
                            value="{{ $payload['email'] }}" defaultValue="member"
                        >
                        <input type="password" name="password" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Password"
                            value="{{ $payload['password'] }}" defaultValue="member@gmail.com"
                        >

                        <p class=" mb-4">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="text-primary font-weight-bold h6">Register</a>
                        </p>
                        <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="submit">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection
