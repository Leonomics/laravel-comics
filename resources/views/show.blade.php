@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{$comic['thumb']}}">
    </div>

    <h1>{{ $comic['title']}}</h1>
@endsection