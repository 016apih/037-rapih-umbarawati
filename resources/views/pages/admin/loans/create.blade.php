@extends('layouts.admin.app')

@section('title', 'Create Loan')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-end mb-4 gap-x-2">
                    <a href="{{ route('admin.loans') }}" class="mx-2">
                        Loans
                    </a>
                    /<span class="mx-2 text-capitalize">{{ $mode }}</span>
                </div>
                <h6 class="mb-4 text-capitalize"">{{ $mode }} Loan</h6>
                <form action="{{ route('admin.loans.store') }}" method="POST">
                    @csrf
                    
                    <x-form-input :item="['name' => 'title', 'label' => 'title', 'mode' => $mode ]" />

                    @if ($mode != "detail")
                        <button type="submit" class="btn text-capitalize @if($mode == "delete") btn-danger @else btn-primary @endif">
                            {{ $mode }}
                        </button>
                    @endif
                </form>
            </div>
        </div>
    </div>
    

@endsection
