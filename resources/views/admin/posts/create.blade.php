@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Crea nuovo post</h1>

        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea class="form-control" id="content" name="content" cols="30" rows="10">{{old('content')}}</textarea>
            </div>

            <input type="submit" value="Salva" class="btn btn-success">
        </form>
    </div>
    
@endsection