<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> Ciao Admin</h1>

        <p>Un nuovo post è stato creato!</p>
        <div>
            <h2>Titolo: </h2>
            <h3>{{ $new_post->title }}</h3>           
        </div>
        <a href="{{ route('admin.posts.show', ['post' => $new_post->id]) }}">Visualizza post</a>
    </div>
</body>
</html>