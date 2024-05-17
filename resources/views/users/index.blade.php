@extends('layouts.app')

@section('title', 'List User')

@section('content')
    <button>
        <a href="{{ route('users.create') }}">
            Add User
        </a>
    </button>
    <br/><br/>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>
                        <a href="{{ route('users.detail', $user['id']) }}">
                            {{ $user['nama'] }}
                        </a>
                    </td>
                    <td>{{ $user['umur'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
