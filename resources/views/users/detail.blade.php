@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
    <h2>Detail User</h2>

    <h3>Id: {{ $user['id'] }}</h3>
    <h3>Nama: {{ $user['nama'] }}</h3>
    <h3>Umur: {{ $user['umur'] }}</h3>
@endsection
