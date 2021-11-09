<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>mail</title>

</head>
<body>
<h1>{{$details['title']}}</h1>
<p>{{$details['body']}}</p>
<p>thank you </p>
</body>
</html>
