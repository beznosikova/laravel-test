@extends('layouts.face')

@section('title')Главная страница@endsection

@section('content')
    <div class="links">
        @foreach($categories as $category)
            <a href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
        @endforeach
    </div>
@endsection