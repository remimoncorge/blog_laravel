<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">        

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div class="top-bar">
        
        <div class="top-bar-right">
            <ul class="menu">
                <li class="deconnexion"><a href="/connexion">Se déconnecter</a></li>
            </ul>
            
        </div>

    </div>

    <div class="callout large primary">
        <div class="row column text-center">
            <h1>Blog de Rémi Moncorgé</h1>
        </div>
    </div>

    <div class="row medium-8 large-7 columns">
                
        @yield('content')

    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();
    </script>
    <p class='footer'>Blog de Rémi Moncorgé ~ Pour toute question n'hésitez pas à m'envoyer 
        <a href="mailto:r.moncorge@gmail.com">un mail</a>
    </p>
</body>

</html>