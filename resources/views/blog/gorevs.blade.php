@extends('layout')

@section('content')

@foreach ($gorevs as $gorev)
<li>{{$gorev->gorevMetni}}</li>
@endforeach


@endsection