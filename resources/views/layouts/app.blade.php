<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Damayanthi App</title>

    @php
        $curr_url = Route::currentRouteName();
    @endphp

    @include('libraries.styles')
</head>

<body>
    <div class="wrapper ">
        @include('components.side')
        <div class="main-panel">
            @include('components.nav')
            <!-- End Navbar -->
            @yield('content')
            {{-- @include('components.footer') --}}
        </div>
      </div>
      @include('libraries.scripts')
</body>

</html>
