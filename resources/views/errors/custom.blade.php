@extends('layouts.face')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-danger">
                    Error {{ $message }}
                </div>
            </div>
        </div>
    </div>
@endsection
