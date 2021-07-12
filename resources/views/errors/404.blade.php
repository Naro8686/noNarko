<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 | {{page('error404','title')}}</title>
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container-fluid mt-5 mb-5">
    <div class="col-md-12">{!! page('error404','body') !!}</div>
</div>
</body>
</html>
