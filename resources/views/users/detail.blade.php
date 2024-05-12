<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if ($user != null)
            {{  $user['name'] }}
        @endif
    </title>
</head>
<body>
    @php
        $message = "User telah ditemukan";
        if($user == null){
            $message = "User tidak ditemukan";
        }
    @endphp

    @include('header', ["message" => $message])

    @if ($user != null)
        <h1>Hellooo, {!! $user['name'] !!}</h1>
        <h1>Umurku {!! $user['age'] !!}</h1>
    @endif
</body>
</html>
