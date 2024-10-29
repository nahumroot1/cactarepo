<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cactacea</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
             html, body {
                background-color: #FDF5D7;
                color: #1D2A54;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            
            .nav{
                vertical-align: top;
                background-color:#F58174;
                height: 55px;
                width: 100%;
                border-radius: 19px;
                display: block;
                text-align: center;
                overflow: hidden;
            }

            .links > a {
                float: left;
                color: #1D2A54;
                background-color: #F58174;
                padding: 0 10px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
                text-decoration: none;
            }
        </style>

            <div id="barra" class="nav">
            @if (Route::has('login'))
                <div id="vistaingreso" class="top-right links">
                <a href="{{ route('sales') }}">Sales de Baño</a>
                <a href="{{ route('mascarillas') }}">Mascarillas Faciales</a>
                <a href="{{ route('jabones') }}">Jabones Artesanales</a>
                <a href="{{ route('shampoo') }}">Shampoo Solido</a>
                <a href="{{ route('acondicionador') }}">Acondicionador Solido</a>
                <a href="{{ route('serums') }}">Serums</a>
                    @auth
                        <a> {{ Auth::user()->name }} | </a>
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a>Invitado |</a>
                        <a href="{{ route('login') }}">Ingresar</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif                 
            </div>
    </head>
    <body>
        
    </body>
</html>
