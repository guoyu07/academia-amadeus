<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Academia de Musica Amadeus</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- PNotify -->
        <link href="{{ asset("css/pnotify.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/pnotify.buttons.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/pnotify.nonblock.min.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                <div class="right_col" role="main">

                    @yield('main_container')

                </div>

                @include('includes/footer')
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <!-- PNotify -->
        <script src="{{ asset("js/pnotify.min.js") }}"></script>
        <script src="{{ asset("js/pnotify.buttons.min.js") }}"></script>
        <script src="{{ asset("js/pnotify.nonblock.min.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>
        <!-- Amadeus scripts -->
        <script src="{{ asset("js/amadeus.js")}}"></script>

        @stack('scripts')

    </body>
</html>