<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
<h1>All Posts</h1>
@foreach($posts as $post)
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
@endforeach
</body>
</html>
