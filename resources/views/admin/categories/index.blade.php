@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="panel-body">
                        @if ($categories->count() > 0)
                            @foreach ($categories as $category)
                                <hr>
                                <div>
                                    <span>{{ $category->id }}.</span>
                                    <span>{{ $category->title }}, </span>
                                    <span>slug:{{ $category->slug }}, </span>
                                    <span>posts: {{ $category->posts->count() }}</span>
                                    <span>
                                        <form action="{{ route('categories.destroy', $category->slug) }}" method="post">
                                            {{ method_field(('DELETE')) }}
                                            {{ csrf_field() }}
                                            <a type="button" class="btn btn-primary" href="{{ route('categories.edit', $category->slug) }}">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </span>
                                </div>
                            @endforeach
                        @else
                            No categories
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
