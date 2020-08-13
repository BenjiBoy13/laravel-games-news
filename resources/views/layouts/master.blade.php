<!DOCTYPE html>
<html lang="es">
    <head>
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, user-scalable=no">

        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
              integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
              crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('/dist/main.css') }}" />
    </head>
    <body>
        @include('blocks.header')

        <main class="main-wrapper">
            @yield('content')
        </main>

        @include('blocks.footer')

        <script type="application/javascript" src="{{ asset('/dist/bundle.js') }}"></script>
    </body>
</html>
