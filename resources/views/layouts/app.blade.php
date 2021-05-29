<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

    <title>Tom & Jerry</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/init.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="wrapper">
        @include('includes.navbar')
        <main>
            @yield('content')
        </main>
    </div>
    @include('includes.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
