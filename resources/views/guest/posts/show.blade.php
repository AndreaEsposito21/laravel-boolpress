@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{$post->title}}</h1>

        <div class="mt-2 mb-2">
            @if ($post_category)
                <h2>Categoria: {{$post->category->name}}</h2>
            @endif
        </div>

        <p>{{$post->content}}</p>
    </div>
    
@endsection