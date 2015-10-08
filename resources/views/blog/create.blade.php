@extends('app')

@section('content')
    <h1>Write a Blog</h1>

    <hr/>

    {!! Form::open(['url' => 'blog']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}

            {!! Form::text('title', null, ['class' => 'form-control', 'foo' => 'bar']) !!}
        </div>

        <!-- Body Form Input -->
        <div class="form-group">

            {!! Form::label('body', 'Body:') !!}

            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

        </div>


        <!-- Add Blog Form Input -->
        <div class="form-group">

            {!! Form::submit('Add Blog', null, ['class' => 'btn btn-primary form-control']) !!}

        </div>

    {!! Form::close() !!}

@stop
