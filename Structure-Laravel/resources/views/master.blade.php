<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil</title>

        <!-- CSS Classique -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

        <!-- Gallerie Images -->
        <link href="{{ asset('css/thumbnail-gallery.css') }}" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- MENU DU SITE -->
        @include('menu')

        <!-- CONTENU -->
        <div class="container">
            @yield('contenu')

            <!-- PIED DE PAGE -->
            @include('footer')

            <!-- SCRIPTS -->
            @include('scripts')
        </div>

    </body>
</html>