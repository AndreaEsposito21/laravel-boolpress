@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Modifica post:</h1>
        <h2>{{$post->title}}</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action=" {{ route('admin.posts.update', ['post' => $post->id]) }} " method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
            </div>

            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea class="form-control" id="content" name="content" cols="30" rows="10">{{old('title', $post->content)}}</textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Nessuna</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>                        
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <div>Tag</div>
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="tags[]" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}">
                        <label class="form-check-label" for="tag-{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            <input type="submit" value="Salva" class="btn btn-success">
        </form>
    </div>
    
@endsection