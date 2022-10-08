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
    @yield('partials.main')
</body>
@include('partials.footer')
</div>
</html>