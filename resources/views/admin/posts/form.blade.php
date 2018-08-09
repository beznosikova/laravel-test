@extends('layouts.app')

@section('content')
    @include('admin.errors')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (empty($entity))
                            Create new post
                        @else
                            Edit post
                        @endif
                    </div>
                    <div class="panel-body">
                        <form
                                class="form-horizontal"
                                action="@if (empty($entity)){{ route('posts.store') }} @else {{ route('posts.update', $entity->slug) }}@endif"
                                method="post"
                        >
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field(('PUT')) }}
                            @endisset
                            @include('admin.form.group', ['field'=>'title', 'fieldType' => 'input'])
                            @include('admin.form.group', ['field'=>'slug', 'fieldType' => 'input'])
                            @include('admin.form.group', ['field'=>'body', 'fieldType' => 'textarea'])
                            @include('admin.form.group', ['field'=>'category_id', 'fieldType' => 'select', 'options' => $categories])
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
