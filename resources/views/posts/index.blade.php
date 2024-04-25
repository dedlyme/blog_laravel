<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
    <h1>Posts</h1>
<ul></ul>
    @foreach ($posts as $post)
        <li><a a href="show/{{$post->id}}"> {{$post["title"]}} </a></li>
    @endforeach
</ul>
</body>
</html>
{{  }}