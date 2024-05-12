<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Ini halaman list users</h1> --}}
    {{-- part 1 --}}
    {{-- <h1><?php echo $id ?></h1>
    <h1><?php echo $name ?></h1>
    <h1><?php echo $age ?></h1>

    <h1>{{ $id }}</h1>
    <h1>{!! $name !!}</h1>
    <h1>{{ $age }}</h1> --}}

    {{-- if conditional --}}
    {{-- @if ($name != null)
        <h1>Heloo, {{ $name }}</h1>
    @else
        <h1>user tidak ditemukan</h1>
    @endif --}}

    @extends('layouts.app')

    @section('title', "Halaman Utama")

    @section('content')
        <h1>Selamat datang di web kami</h1>
    @endsection

    {{-- table looping --}}
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>umur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3">versi for</td>
            </tr>
            @for ($i = 0; $i < count($users); $i++)
                <tr>
                    <td>
                        <a href="/users/{{ $i+1 }}">{{ $users[$i]['id'] }}</a>
                    </td>
                    <td>{!! $users[$i]['name'] !!}</td>
                    <td>{{ $users[$i]['age'] }}</td>
                </tr>
            @endfor

            <tr>
                <td colspan="3">versi foreach</td>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($users as $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{!! $user["name"] !!}</td>
                    <td>{{ $user["age"] }}</td>
                </tr>
            @endforeach
            
            <tr>
                <td colspan="3">versi foreach II</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user["id"] }}</td>
                    <td>
                        <a href="{{ route('users.detail', $user['id']) }}">
                            {!! $user["name"] !!}
                        </a>
                    </td>
                    <td>{{ $user["age"] }}</td>
                </tr>
            @endforeach

            <tr>
                <td colspan="3">versi foreach with index</td>
            </tr>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $user["id"] }}, index ke {{ $index }}</td>
                    <td>{!! $user["name"] !!}</td>
                    <td>{{ $user["age"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
