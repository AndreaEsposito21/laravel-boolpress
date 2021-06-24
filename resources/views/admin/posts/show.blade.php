@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ $post->title }}</h1>

        <div>Slug: {{ $post->slug }} </div>

        @if ($post_category)
            <div>Category: {{ $post_category->name }} </div> 
        @endif

        <div>
            Tag:
            @foreach ($post_tags as $tag)
                {{ $tag->name }}{{ $loop->last ? '.' : ', '}}
            @endforeach
        </div>

        <p> {{$post->content}} </p>

        <a href=" {{ route('admin.posts.edit', ['post' => $post->id])}} " class="btn btn-success">Modifica post</a>
    </div>
    
@endsection