@extends('layouts.face')

@section('content')
    @include('admin.errors')
    <div class="links">
        <h1>Contact us</h1>
        <div class="panel-body">
            {!! Form::open(['action' => 'ContactFormController@store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name'); !!}
                    {!! Form::text(
                        'name', 
                        $value = null, 
                        $attributes = 
                            [
                                'class' => "form-control",
                                'id' => 'email'
                            ]); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Phone'); !!}
                    {!! Form::text(
                        'phone', 
                        $value = null, 
                            [
                                'placeholder' => "(067)5555555",
                                'class' => "form-control",
                                'id' => 'email'
                            ]); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email Address'); !!}
                    {!! Form::email(
                        'email', 
                        $value = null, 
                        $attributes = 
                            [
                                'placeholder' => "name@example.com",
                                'class' => "form-control",
                                'id' => 'email'
                            ]); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('message', 'Message'); !!}
                    {!! Form::textarea(
                        'message', 
                        null, 
                        [
                            'class' => "form-control",
                            'rows' => 3,
                            'id' => 'message'
                        ]); 
                    !!}
                </div>   
                <div class="form-group">
                    {!! NoCaptcha::display() !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Send', $attributes = ['class' => 'btn btn-primary']); !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection


@section('scripts')
    {!! NoCaptcha::renderJs() !!}
@endsection