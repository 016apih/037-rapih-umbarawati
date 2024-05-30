@extends('layouts.admin.app')

@section('title', 'My Profile')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4 text-center">
                {{-- <h6 class="mb-4">My Profile</h6> --}}
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle mx-auto mb-4" src="{{ asset('assets/img/avatar.jpg') }}" style="width: 100px; height: 100px;" alt="img-user">
                    <h5 class="mb-1">{{ $user->username }}</h5>
                    <p class="mb-1">{{ $user->email }}</p>
                    <p class="mb-1">{{ $user->no_hp }}</p>
                    <p class="mb-1">{{ $user->address }}</p>
                    <p class="mb-0">Joined member since {{ $user->created_at }}</p>
                    
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6">
                <x-card-dashboard :card='["fas fa-user-cog", "Your activity", "5"]' />
            </div>
            <div class="col-sm-6">
                <x-card-dashboard :card='["fas fa-exchange-alt", "your Loans", "10"]' />
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End --> --}}

@endsection
