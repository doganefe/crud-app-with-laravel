@extends('layout')

@section('content')

<div class="container is-fluid">
<form method="POST" action="/posts/{{$post->id}}}">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <label>Title</label>
    <input name="title" class="input" type="text" value="{{$post->title}}">
    <br>
    <label>Content</label>
    <input name="content" class="input"type="text" value="{{$post->content}}">
    <br><br>
    <button class="button is-primary is-outlined">Edit</button>
</form>
</div>
@include('errors')

@endsection