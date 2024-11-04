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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                justify-content: center;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
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

            .texto {
                max-width: 600px;
                
               
            }
            .texto h1{
                margin: 0;
                font-size: 37px;
            }
            .texto p{
                margin-top: 5px;
                font-size: 25px;
                font-weight: bold;
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

            .imagenes-container {
            background-color: #F4F9D2;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Permite que las imágenes se muevan a la siguiente línea en pantallas pequeñas */
            padding: 10px;
            width: 100%; /* Toma el ancho completo del contenedor */
            max-width: 1200px; /* Limita el ancho máximo en pantallas grandes */
            margin: 0 auto; /* Centra el contenedor en pantallas grandes */
            }

            .img {
              width: 18.9%; /* Cada imagen toma el 20% del ancho del contenedor */
              height: auto;
              
            }

            /* Media query para pantallas medianas */
             @media (max-width: 768px) {
            .img {
               width: 32%; /* Cada imagen toma casi la mitad del ancho en pantallas medianas */
                }
            }

            /* Media query para pantallas pequeñas */
            @media (max-width: 480px) {
            .img {
            width: 100%; /* Cada imagen toma el ancho completo en pantallas pequeñas */
            }
            }
            
            .img2{
                width: 350px;
                height: 350px;
            }
            
            .contenedor{
                display: flex; 
                align-items: center;
                gap: 20px;
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
