<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue</title>
</head>

<body>
@include('partials.nav')
    <div id="app">
        <beer-list :beers='@json($beers)'route='{{ route('beers.index') }}/'></beer-list>
    </div>

    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
