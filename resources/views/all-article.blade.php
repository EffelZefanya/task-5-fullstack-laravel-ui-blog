@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Articles</h1>
        </div>
        <div>
            <h2>Create New Article</h2>
            <a href="/addArticlePage" class="btn dark-btn">Add Article</a>
        </div>
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <img src="{{ Storage::url('images/' . $article->image)}}" alt="Article Image">
            <div class="col-sm card">
                <div class="card-body">
                    <h4 class="card-title">{{ $article->title }}</h4>
                    <h5 class="card-subtitle">{{ $article->content }}</h5>
                    <br />
                    <h6 class="card-subtitle">{{"by " . $article->user->name }}</h6>
                    <br>
                    <h6 class=card-subtitle>{{ "category: " . $article->category->name }}</h6>
                    <br>
                    <form action="/readArticle/{{ $article->id }}" method="GET">
                        @csrf
                        <input class="btn" type="submit" value="Read">
                    </form>
                </div>
                </div>
            </div>
            <div style="height:50px">

            </div>
            @endforeach
        </div>
    </div>
@endsection
