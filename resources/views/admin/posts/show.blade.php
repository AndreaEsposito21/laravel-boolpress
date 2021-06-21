@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ $post->title }}</h1>

        <div>Slug: {{ $post->slug }} </div>

        <p> {{$post->content}} </p>

        <a href=" {{ route('admin.posts.edit', ['post' => $post->id])}} " class="btn btn-success">Modifica post</a>
    </div>
    
@endsection