<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">        

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .footer{
            text-align: center;
            padding-top: 50px;
        }

        .errors{
            color:red;
        }

        .connexion{
            text-align: right;
        }

        #edit_button{
            background-color: #FFA500;
            color:white;
            padding: 13px 28px;
            text-align: center;
        }

        #delete_button{
            background-color: #f44336;;
            color:white;
            padding: 13px 28px;
            text-align: center;
        }

        #new_button{
            background-color: #4CAF50;
            color:white;
            padding: 13px 28px;
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li><a href="/welcome"> Home</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li class="connexion"><a href="/connexion">Se connecter</a></li>
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