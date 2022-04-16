<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Laravel 8 CRUD Operation using Vue.js</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="app"></div>
<script src="../frontEnd/app.js" type="text/javascript"></script>
/*<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>*/
</body>
</html>
