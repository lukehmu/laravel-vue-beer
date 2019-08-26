<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
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
