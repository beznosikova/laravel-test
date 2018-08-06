@extends('layouts.face')

@section('title')Категория - {{ $category->title }}@endsection

@section('content')
    <div class="links">
        @foreach($posts as $post)
            <a href="{{ route('post', [$category->slug, $post->slug]) }}">{{ $post->title }}</a>
        @endforeach
    </div>
@endsection