@extends('layouts.admin.app')

@section('title', 'Create Roles')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <div class="d-flex align-items-center justify-content-end mb-4 gap-x-2">
                        <a href="{{ route('admin.roles') }}" class="mx-2">
                            Roles
                        </a>
                        /<span class="mx-2 text-capitalize">{{ $mode }}</span>
                    </div>
                    <h6 class="mb-4 text-capitalize"">{{ $mode }} Role</h6>
                    <form action="{{ route('admin.roles.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name"
                                    @if($mode !== "create") value="{{ $role['name'] }}" @endif
                                    @if($mode == "detail" || $mode == "delete") readonly @endif
                                >
                            </div>
                        </div>
                        @if ($mode != "detail")
                            <button type="submit" class="btn text-capitalize @if($mode == "delete") btn-danger @else btn-primary @endif">
                                {{ $mode }}
                            </button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    

@endsection
