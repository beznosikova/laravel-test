@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div>
                    <img src="{{ asset('storage/photos/Z9wHwEiCM6vEeXu1w3m2wcWJkza84HlDtbKFoKfk.png') }}" alt="">
                    {{ asset('storage/loginactivity.txt') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
