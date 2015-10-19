@extends('app')

@section('content')
    <h1>
        <a href="{{ action('ArticlesController@show', [$article->id]) }}"> {{ $article->title }} </a>
    </h1>

    <article>
        <div class="body">{{ $article->body }}</div>
    </article>

@stop