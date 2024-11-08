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

        .nav {
            background-color: #F58174;
            height: 55px;
            width: 100%;
            border-radius: 19px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .texto {
            max-width: 600px;
        }

        .texto h1 {
            margin: 0;
            font-size: 37px;
        }

        .texto p {
            margin-top: 5px;
            font-size: 25px;
            font-weight: bold;
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

        .imagenes-container {
            background-color: #F4F9D2;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 10px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .img {
            width: 18.9%;
            height: auto;
        }

        .img2 {
            width: 350px;
            height: 350px;
        }

        .contenedor {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            text-align: center;
        }

        /* Media queries para pantallas medianas */
        @media (max-width: 768px) {
            .img {
                width: 32%;
            }

            .contenedor {
                flex-direction: column;
                text-align: center;
            }

            .texto h1 {
                font-size: 28px;
            }

            .texto p {
                font-size: 20px;
            }

            .nav {
                flex-direction: column;
                padding: 10px;
            }
        }

        /* Media queries para pantallas pequeñas */
        @media (max-width: 480px) {
            .img {
                width: 100%;
            }

            .img2 {
                width: 250px;
                height: auto;
            }

            .texto h1 {
                font-size: 24px;
            }

            .texto p {
                font-size: 18px;
            }

            .links > a {
                font-size: 10px;
                padding: 5px;
            }
        }
    </style>
</head>
<body>

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
                    <a>{{ Auth::user()->name }} | </a>
                    <a href="{{ url('/home') }}">Inicio</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <!-- Aquí irían los enlaces para iniciar sesión y registro si los tienes -->
                @endauth
            </div>
        @endif                 
    </div>

    <div id="imagenes" class="imagenes-container">
        <img src="parabenos.png" class="img">
        <img src="organicos.png" class="img">
        <img src="aromas.png" class="img">
        <img src="empaques.png" class="img">
        <img src="cruelty.png" class="img">
    </div>
    
    <div id="contenido" class="contenedor">
        <img src="logo.jpg" class="img2"> 
        <div id="texto" class="texto">
            <h1>¿QUIÉNES SOMOS?</h1> 
            <p>Somos una empresa mexicana que formula, produce y ofrece productos cosméticos
             y de higiene personal orgánicos, libres de: derivados de petróleo, colorantes,
              aromas artificiales y con empaques biodegradables.</p>
        </div>
    </div>
</body>
</html>