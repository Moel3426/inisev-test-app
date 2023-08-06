<!DOCTYPE html>
<html>
<head>
    <title>Hi, New Post Published</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <p>Visit Our Website <a href="{{ $post->website->url }}">here</a>.</p>
</body>
</html>
