<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Erreur 404</title>

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
        <br />
        <div class="container">
            <div class="col-sm-offset-4 col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Erreur 404</h3>
                    </div>
                    <div class="panel-body"> 
                        <p>La page demandée n'existe pas...</p>
                    </div>
                </div>
            </div>
            
            <!-- SCRIPTS -->
            @include('scripts')
        </div>
    </body>
</html>

