@extends('layouts.face')

@section('title')Пост - {{ $post->title }}@endsection

@section('content')
    <div class="links">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        {{--<a href="https://laravel.com/docs">Documentation</a>--}}
        {{--<a href="https://laracasts.com">Laracasts</a>--}}
        {{--<a href="https://laravel-news.com">News</a>--}}
        {{--<a href="https://forge.laravel.com">Forge</a>--}}
        {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
    </div>
@endsection