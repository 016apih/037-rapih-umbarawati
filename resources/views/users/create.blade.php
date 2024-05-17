@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <h2>Create User</h2>

    {{-- @isset($error)
        <p style="color: red;">{{ $error }}</p>
    @endisset --}}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif
    
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama"><br/>
        <label for="umur">Umur </label>
        <input type="text" name="umur"><br/>
        <label for="gambar">Gambar </label>
        <input type="file" id="gambar" name="gambar"><br/>
        <button type="submit">Submit</button>
    </form>

    @isset($payload)
        <h3>Haloo namaku, {{ $payload['nama'] }}</h3>
        <h3>Umurku srkrang {{ $payload['umur'] }} tahun</h3>
        <h3>Kenalan Yukkkk</h3>
    @endisset
@endsection
