@extends('app')

@section('content')
    <h1>Blog</h1>

    <hr/>

    @foreach($blog as $blog)
        <blog>
            <h2>

                [<a href="/blog/public/blog/{{$blog->id}}">{{$blog->id}}</a>]
                <a href="{{ action('BlogController@show', [$blog->id]) }}">{{$blog->title}}</a>
                <a href="{{ url('/blog', $blog->id) }}">_link</a>

            </h2>

            <div class="body">{{$blog->body}}</div>
        </blog>
    @endforeach



@stop
