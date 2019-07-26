@extends('layout')

@section('content')

<h4 class="title">Edit page</h4>

<form method="POST" action="/blog/{{$blog->id}}">
    @csrf
    @method('PATCH')
    <div>
      <label>Blog</label>
      <input type="text" name="blog" value="{{$blog->blog}}">
    </div>
    <div>
      <label>Description</label>
      <input type="text" name="description" value="{{$blog->description}}">
    </div>
    <button class="button is-info ">Submit</button>
</form>

@include('errors')















@endsection