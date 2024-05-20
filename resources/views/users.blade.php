<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>

    <a href="{{ route('users.add') }}" >Create</a>

    @foreach ($users as $item)
        <div>
            <h1>{{ $item['name'] }}
                <a href="{{ route('users.edit', $item['id']) }}">Edit</a>
                <a href="{{ route('users.destroy', $item['id']) }}">Delete</a>
            </h1>
        </div>
    @endforeach

</body>
</html>