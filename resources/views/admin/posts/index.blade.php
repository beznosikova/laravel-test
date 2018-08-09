@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>
                    <div class="panel-body">
                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                                <hr>
                                <div>
                                    <span>{{ $post->id }}.</span>
                                    <span>{{ $post->title }}, </span>
                                    <span>slug:{{ $post->slug }}, </span>
                                    <span>
                                        <form action="{{ route('posts.destroy', $post->slug) }}" method="post">
                                            {{ method_field(('DELETE')) }}
                                            {{ csrf_field() }}
                                            <a type="button" class="btn btn-primary" href="{{ route('posts.edit', $post->slug) }}">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </span>
                                </div>
                            @endforeach
                        @else
                            No posts
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
