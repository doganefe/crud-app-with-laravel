@extends('layout')

@section('content')
<h1 class="title is-1">Posts</h1>
@if($posts->count()<1)
    <p>You don't have any post yet...</p>
    <br>
@endif

    <p><a href="/posts/create">Click</a> to create a post.</p>
    <br>

@foreach ($posts as $post)
<div class="card" style="width:33%;float:left;">
        <header class="card-header">
          <p class="card-header-title">
            {{$post->title}}
          </p>
          <a href="#" class="card-header-icon" aria-label="more options">
            <span class="icon">
              <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
          </a>
        </header>
        <div class="card-content">
          <div class="content">
            {{$post->content}}
            <br>
          </div>
        </div>
        <footer class="card-footer">
        <a href="/posts/{{$post->id}}" class="card-footer-item">Show</a>
        <a href="/posts/{{$post->id}}/edit" class="card-footer-item">Edit</a>
        <a class="card-footer-item">
          <form method="POST" action="/posts/{{$post->id}}">
            {{method_field('DELETE')}}
            {{ csrf_field() }}
            <button class="button is-white ">Delete</button>
        </form> </a>
        </footer>
      </div>
@endforeach

@endsection
