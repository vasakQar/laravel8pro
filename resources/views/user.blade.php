<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>User View</h1>
    <h2>user name {{$name}}</h2>
    @foreach($users as $user)
        <p>{{$user}}</p>
    @endforeach
    <h3>name:{{$users['name']}}</h3>
</body>
</html>
