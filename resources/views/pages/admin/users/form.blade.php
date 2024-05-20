@extends('layouts.admin.app')

@section('title', 'Create User')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-end mb-4 gap-x-2">
                    <a href="{{ route('admin.users') }}" class="mx-2">
                        User
                    </a>
                    /<span class="mx-2 text-capitalize">{{ $mode }}</span>
                </div>
                <h6 class="mb-4 text-capitalize"">{{ $mode }} User</h6>
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Roles</legend>
                        <div class="col-sm-10">
                            @foreach ($roles as $role)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios"
                                        id="gridRadios{{ $role['id'] }}" value="{{ $role['id'] }}"
                                        @if($mode !== "create" &&  $role['id'] == $user['role_id']) checked @endif
                                        @if($mode == "detail" || $mode == "delete") disabled @endif
                                    >
                                    <label class="form-check-label" for="gridRadios1">
                                        {{ $role['name'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" id="username"
                                @if($mode !== "create") value="{{ $user['username'] }}" @endif
                                @if($mode == "detail" || $mode == "delete") readonly @endif
                            >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email"
                                @if($mode !== "create") value="{{ $user['email'] }}" @endif
                                @if($mode == "detail" || $mode == "delete") readonly @endif
                            >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_hp" class="form-control" id="no_hp"
                                @if($mode !== "create") value="{{ $user['no_hp'] }}" @endif
                                @if($mode == "detail" || $mode == "delete") readonly @endif
                            >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Address" id="address" style="height: 150px;"
                                @if($mode !== "create") value="{{ $user['address'] }}" @endif
                                @if($mode == "detail" || $mode == "delete") readonly @endif
                            >
                            </textarea>
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
    

@endsection
