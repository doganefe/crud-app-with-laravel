
@extends('layout')

@section('content')
    <form method="POST" action='/posts'>
        {{ csrf_field() }}
        <label>Title</label>
        <div class="control">
        <input name="title" type="text" class="input {{$errors->has('title') ? 'is-danger' : ''  }}" value="{{old('title')}}">
        </div>
        <label>Content</label>
    <input name="content" type="text" class="textarea {{$errors->has('content') ? 'is-danger' : ''  }}" value="{{old('content')}}" >
        <br>
        <button class="button is-primary" type="submit">Create</button>
    </form>
    @include('errors')
@endsection