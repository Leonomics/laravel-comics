@extends('layouts.app')

@section('content')
<div class="mainContainer container">
    <div class="grid-container">
    @forelse($comics as $comic)
        <div>
            <img class="comicCover" src="{{$comic['thumb']}}" />
            {{$comic['title']}}
        </div>
    @empty
        <p>non ci sono prodotti</p>
    @endempty
    </div>
</div>


@endsection