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

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .franja-color{
                vertical-align: top;
                background-color:#F58174;
                height: 55px;
                width: 100%;
                border-radius: 19px;
            }

            .title {
                font-size: 60px;
                text-align: right;
            }

            .links > a {
                color: #1D2A54;
                background-color: #F58174;
                padding: 0 10px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                align-self: center;
                margin-bottom: 30px;
            }
            .imagen1{
                width: 100%;
                height: 280px;
            }
            .imagen2{
                display: flex;
                align-items:center;   
                gap:20px;
                width: 150px;
                height: 150px;
            }
        </style>
    
    

    

     <div class="franja-color">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
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

            <div class="content">
                     <div class="top-left links ">
                
                         <a href="{{ route('sales') }}">Sales de Baño</a>
                         <a href="{{ route('mascarillas') }}">Mascarillas Faciales</a>
                         <a href="{{ route('jabones') }}">Jabones Artesanales</a>
                         <a href="{{ route('shampoo') }}">Shampoo Solido</a>
                         <a href="{{ route('acondicionador') }}">Acondicionador Solido</a>
                         <a href="{{ route('serums') }}">Serums</a>
                     </div>
                </div>
                </div>
            </div>
        </div>
    </head>
    <body>
            <img src="land1.png" class="imagen1">
            <div class="title m-b-md">
               
            ¿QUIÉNES SOMOS?
            <img src="logo.jpg" class="imagen2"> 
            </div>
           
            
        
    </body>
    
</html>
