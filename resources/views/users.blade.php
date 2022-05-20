<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>
    <h1>Users</h1>

    @if (count($users) === 0)
    <h2>No User Available</h2>
    @else

    @endif
    <ul>
        @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ul>


    <h2>Add New User</h2>

    <form action="{{ route('addUser') }}" method="post">
        @csrf
        <input required type="text" name="name" placeholder="Name">
        <input required type="text" name="email" placeholder="Email">
        <input required type="text" name="password" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
</body>

</html>