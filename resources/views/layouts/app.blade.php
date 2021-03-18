<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>TJ</title>

    </head>
    <body>
        <div class="container">
          @yield('content')
        </div>
        @yield('footer')
    </body>
</html>