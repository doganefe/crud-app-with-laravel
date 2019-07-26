@extends('layout')

@section('content')
<div>Title : {{$blog->blog}}</div>
<div>description : {{$blog->description}}</div>

@foreach ($blog->gorevs as $gorev)
    <div>
        
        <form action="/gorevs/{{$gorev->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div><input style="width:15%;float:left;margin-right:10px;"name="editInput"class="input" type="text" value="{{$gorev->gorevMetni}}"></div> 
            <button style="float:left;" class="button is-success  is-outlined">Edit</button>
        </form>
        <form action="/gorevs/{{$gorev->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button is-danger is-outlined">Remove</button>
        </form>
    </div>
    @endforeach
    
    <form method="POST" action="/blog/{{$blog->id}}/gorevs">
        @csrf
        <input style="margin-top:12px;margin-bottom:17px;" name="gorevMetni" class="input" type="text"/>
        <button class="button is-success is-outlined">Add</button>
    </form>
    
    
    @include('errors')
@endsection
