@extends('layouts.app')

@section('header-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('footer-script')
    <script src="{{ asset('js/post.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div id="root">
            <h1>
                @{{title}}
            </h1>

            
            <div class="row">
                <div v-for="post in posts" class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title"> @{{ post.title }} </h4>

                            <p class="card-text">@{{ post.content }}</p>

                            <h5>Category: @{{ post.category }}</h5>

                            <div v-if="post.tags.length > 0">
                                <h5>Tags:</h5>
                                <ul>
                                    <li v-for="tag in post.tags">@{{ tag.name }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

