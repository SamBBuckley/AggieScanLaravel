<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    </body>
    <nav>
        <!--Nav Goes Here-->
    </nav>

    @yield('content')

    <footer>
        <!--Footer Goes Here-->
    </footer>
    </body>
</html>
