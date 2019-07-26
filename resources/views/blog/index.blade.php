@extends('layout')

@section('content')

<h1 class="title">List of blogs</h1>
<p style="margin-bottom:15px;"><a href="/blog/create">Click</a> to create form</p>
    @foreach ($blogs as $blog)
    <div style="width:20%;height:100%;float:left;">
        <div>{{$blog->blog}}</div>
    </div>
    <div style="witdh:60%;height:100%;">
            <a class="button"style="float:left;margin-right:5px;" href="blog/{{$blog->id}}">Show</a>
            <a class="button" style="float:left;margin-right:5px;" href="blog/{{$blog->id}}/edit">Edit</a>
            <form method="POST" action="/blog/{{$blog->id}}">
            @csrf
            @method('DELETE')
                <button class="button">Delete</button>
            </form></div>
    @endforeach

@endsection