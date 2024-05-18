@extends('layouts.homepage.app')

@section('title', 'Register - PemulaBooks')

@section('content')

<!-- Form Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="p-5 bg-light rounded">
            <div class="row g-4 justify-content-center">
                <div class="col-12">
                    <div class="text-center mx-auto" style="max-width: 700px;">
                        <h1 class="text-primary">Register</h1>
                        <p class="mb-1">
                            Please enter member data.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p style="color: red;">{{ $error }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('store') }}" method="POST" >
                        @csrf
                        <input type="text" name="username" class="w-100 form-control border-0 py-3 mb-3" placeholder="Your Name">
                        <input type="email" name="email" class="w-100 form-control border-0 py-3 mb-3" placeholder="Your Email">
                        <input type="password" name="password" class="w-100 form-control border-0 py-3 mb-3" placeholder="Your Password">
                        <input type="text" name="no_hp" class="w-100 form-control border-0 py-3 mb-3" placeholder="Your Number Handphone">
                        <textarea class="w-100 form-control border-0 mb-3" rows="4" cols="10" placeholder="Your Address"></textarea>
                        <p class=" mb-3">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-primary font-weight-bold h6">Log In</a>
                        </p>
                        <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="submit">
                            Register
                        </button>
                    </form>

                    @isset($payload)
                        <h5 class="mt-4">example of member registration results</h5>
                        <p>Username: {{ $payload['username'] }}</p>
                        <p>Email: {{ $payload['email'] }}</p>
                        <p>No Hp: {{ $payload['no_hp'] }}</p>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection
