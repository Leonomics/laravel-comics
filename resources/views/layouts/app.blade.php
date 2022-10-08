<!DOCTYPE html>
<html lang="en">
<div id="app">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('metaTitle')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

@include('partials.header')
<body>
    <main>
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
    </main>
</body>
@include('partials.footer')
</div>
</html>