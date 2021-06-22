@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{$post->title}}</h1>

        <div class="mt-2 mb-2">
            <h2>Categoria:</h2>
            @if ($post_category)
                <div>{{$post->category->name}}</div>
            @endif
        </div>

        <p>{{$post->content}}</p>
    </div>
    
@endsection