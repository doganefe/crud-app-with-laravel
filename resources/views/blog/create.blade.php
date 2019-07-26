@extends('layout')

@section('content')


<form method="POST" action="/blog">
    @csrf
    <label class="label" for="blog">Blog</label>
    <input class="input {{$errors->has('blog') ? 'is-danger' : '' }}" name="blog" type="text" value="{{old('blog')}}">
    <label class="label">Description</label>
    <input class="input {{$errors->has('description') ? 'is-danger' : '' }}" name="description" value="{{old('description')}}"/>
    <br> <br>
    <button class="button">Submit</button>
</form>

@include('errors')

@endsection