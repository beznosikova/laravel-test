@if ($errors->any())
    <div class="alert alert-danger">
        {{--<div> title error:{{ $errors->first('title') }}</div>--}}
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif