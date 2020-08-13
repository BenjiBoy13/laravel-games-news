<!DOCTYPE html>
<html lang="es">
    <head>
        <title> @yield('title') </title>
    </head>
    <body>
        <main class="main-wrapper">
            @yield('content')
        </main>

        <script type="application/javascript" src="{{ asset('/dist/bundle.js') }}"></script>
    </body>
</html>
