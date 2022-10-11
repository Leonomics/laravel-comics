@extends('layouts.app')

@section('content')
<div class="mainContainer container">
    <div class="grid-container">
    @forelse($comics as $key => $comic)
        <div>
            <a href="{{route('prodotto', ['index'=>$key ])}}">
                <img class="comicCover" src="{{$comic['thumb']}}" />
                {{$comic['title']}}
            </a>
        </div>
    @empty
        <p>non ci sono prodotti</p>
    @endempty
    </div>
</div>


@endsection