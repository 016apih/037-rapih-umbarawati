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
                <form
                    @if ($mode != 'detail')
                        action="{{ route('admin.loans.'.$mode, $loan == null ? null : $loan->id) }}"
                    @endif
                    method="POST"
                >
                    @csrf
                    @if ($loan != null)
                        @if ($mode == 'edit')
                            @method('PUT')
                        @else
                            @method('DELETE')
                        @endif
                    @endif

                    <x-form-select
                        :item="[
                            'mode' => $mode,
                            'name' => 'book_id',
                            'label' => 'Title',
                            'value' => $loan == null ? '' :  $loan->book_id,
                            'options' => $books,
                            'disabled' => ['status', 'borrowed']
                        ]"
                    />
                    <x-form-select
                        :item="[
                            'mode' => $mode,
                            'name' => 'user_id',
                            'label' => 'User',
                            'value' => $loan == null ? '' :  $loan->user_id,
                            'options' => $users
                        ]"
                    />
                    <x-form-select
                        :item="[
                            'mode' => $mode,
                            'name' => 'status',
                            'label' => 'Status',
                            'value' => $loan == null ? '' :  $loan->status,
                            'options' => [
                                (object)['id' => 'onprocess', 'name' => 'On Process'],
                                (object)['id' => 'active', 'name' => 'Active'],
                                (object)['id' => 'late', 'name' => 'Late'],
                                (object)['id' => 'return', 'name' => 'Return']
                            ]
                        ]"
                    />
                    <x-form-input
                        :item="[
                            'mode' => $mode,
                            'type' => 'date',
                            'name' => 'return_date',
                            'label' => 'Return Date',
                            'value' => $loan == null ? '' :  $loan->return_date,
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
