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
                <form
                    @if ($mode != 'detail')
                        action="{{ route('admin.users.'.$mode, $user == null ? null : $user->id) }}"
                    @endif
                    method="POST"
                >
                    @csrf
                    @if ($user != null)
                        @if ($mode == 'edit')
                            @method('PUT')
                        @else
                            @method('DELETE')
                        @endif
                    @endif

                    {{-- <x-form-select
                        :item="[
                            'mode' => $mode,
                            'name' => 'role_id',
                            'label' => 'Role',
                            'value' => $user == null ? 'aa' :  $user->role_id,
                            'options' => $roles
                        ]"
                    /> --}}
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'username',
                            'label' => 'Username',
                            'value' => $user == null ? '' :  $user->username,
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'email',
                            'label' => 'Email',
                            'value' => $user == null ? '' :  $user->email,
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'no_hp',
                            'label' => 'No Hp',
                            'value' => $user == null ? '' :  $user->no_hp,
                        ]"
                    />
                    <x-form-textarea
                        :item="[
                            'mode' => $mode,
                            'name' => 'address',
                            'label' => 'Address',
                            'value' => $user == null ? '' :  $user->address,
                        ]"
                    />
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
