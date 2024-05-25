@extends('layouts.admin.app')

@section('title', 'Create Roles')

@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-end mb-4 gap-x-2">
                    <a href="{{ route('admin.roles') }}" class="mx-2">
                        Roles
                    </a>
                    /<span class="mx-2 text-capitalize">{{ $mode }}</span>
                </div>
                <h6 class="mb-4 text-capitalize"">{{ $mode }} Role</h6>
                @if ($mode != 'detail')
                    <form action="{{ route('admin.roles.'.$mode, $role == null ? null : $role->id) }}" method="POST">
                @endif
                    @csrf

                    @if ($role != null)
                        @if ($mode == 'edit')
                            @method('PUT')
                        @else
                            @method('DELETE')
                        @endif
                    @endif

                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'name' => 'name',
                            'label' => 'Role',
                            'value' => $role == null ? '' :  $role->name,
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
