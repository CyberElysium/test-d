<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Damayanthi App Login</title>

    @include('libraries.styles')
</head>

<body>
    <div class="wrapper wrapper-full-page">
        @yield('content')
    </div>
    @include('libraries.scripts')
</body>

</html>
