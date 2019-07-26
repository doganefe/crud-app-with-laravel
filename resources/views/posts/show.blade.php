@extends('layout')

@section('content')
    <h3 class="title">{{$post->title}}</h3>
    <p>{{$post->content}}</p>
    @if($post->tasks->count())
    <p>Let's look at tasks!</p>
    <div style="width:50%;">
    @foreach ($post->tasks as $task)
            <form  method="POST" action="/tasks/{{$task->id}}">
            @method('PATCH')
            @csrf
            <div style="width:25%;float:left;">
                <label class="checkbox {{($task->completed)? 'isChecked' : ''}}" for="completed">
                    <input type="checkbox"name="completed" onchange="this.form.submit()"{{($task->completed) ? 'checked' : '' }}>
                    {{$task->description}}
                </label>
            </div>
                <button class="button is-danger is-outlined">Delete</button>
            </form>
            @endforeach
            @else
            <p>There isn't any task to show :(</p>
            @endif
        </div>

        <div style="margin-bottom:12px;">
                <small>created at : {{$post->created_at}}</small>
        </div>
            
    <div class="field">
        <form method="POST" action="/posts/{{$post->id}}/tasks">
            @csrf 
            <div class="field">
            <input class="input" type="text" name="description" placeholder="add task">
            </div>
              <button class="button is-primary">
                Add
              </button>
        </form>
    </div>

    @include('errors')
   
    @endsection