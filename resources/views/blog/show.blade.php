 @extends('app')

@section('content')
    <h1>{{$blog->title}}</h1>


    
    <blog>
        {{$blog->body}}
    </blog>

@stop
