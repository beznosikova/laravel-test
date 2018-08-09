@extends('layouts.app')

@section('content')
    @include('admin.errors')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (empty($entity))
                            Create new category
                        @else
                            Edit category
                        @endif
                    </div>
                    <div class="panel-body">
                        <form
                                class="form-horizontal"
                                action="@if (empty($entity)){{ route('categories.store') }} @else {{ route('categories.update', $entity->slug) }}@endif"
                                method="post"
                        >
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field(('PUT')) }}
                            @endisset
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title:</label>
                                <div class="col-sm-10">
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="title"
                                            placeholder="Enter title"
                                            name="title"
                                            value="{{ old('title', isset($entity)? $entity->title : '') }}"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="slug">Slug:</label>
                                <div class="col-sm-10">
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="title"
                                            placeholder="Enter slug"
                                            name="slug"
                                            value="{{ old('slug', isset($entity)? $entity->slug : '') }}"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="body">Body:</label>
                                <div class="col-sm-10">
                                    <textarea
                                            class="form-control"
                                            id="body"
                                            placeholder="Enter body"
                                            name="body"
                                    >{{ old('body', isset($entity)? $entity->body : '') }}</textarea>
                                </div>
                            </div>
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
