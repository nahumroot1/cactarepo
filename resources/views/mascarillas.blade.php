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

        .nav {
            background-color: #F58174;
            height: 55px;
            width: 100%;
            border-radius: 19px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            position: relative;
        }

        .menu-icon {
            display: none;
            font-size: 30px;
            cursor: pointer;
        }

        .links {
            display: flex;
            gap: 10px;
        }

        .product-container {
            display: flex;
            align-items: center; /* Alinea imagen y texto en el mismo nivel vertical */
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 16px 0; 
        }

        /* Imagen del producto */
        .img {
            width: 150px; /* Tamaño de la imagen */
            height: auto;
            margin-left: 20px; /* Espacio entre el texto y la imagen */
        }

        /* Título del producto */
        h1 {
            font-size: 1.5em;
            margin: 0;
        }

        /* Descripción del producto */
        p {
            font-size: 1em;
            color: #666;
            margin-top: 8px;
            font-weight: bold;
        }

        /* Contenedor de texto */
        .text-container {
            flex: 1;
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

        /* Estilos para el menú desplegable en pantallas pequeñas */
        @media (max-width: 768px) {
            .links {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #F58174;
                position: absolute;
                top: 55px;
                left: 0;
                padding: 10px;
                border-radius: 0 0 19px 19px;
            }

            .links.show {
                display: flex;
            }

            .menu-icon {
                display: block;
                color: #1D2A54;
            }
        }
    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <div id="barra" class="nav">
        <span class="menu-icon" onclick="toggleMenu()">☰</span> <!-- Icono de menú (hamburger) -->
        @if (Route::has('login'))
            <div id="vistaingreso" class="links">
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
                <a>Invitado |</a>
                        <a href="{{ route('login') }}">Ingresar</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                @endauth
            </div>
        @endif                 
    </div>

    <script>
        function toggleMenu() {
            const links = document.getElementById("vistaingreso");
            links.classList.toggle("show");
        }
    </script>

<div class="product-container">
        <div class="text-container">
            <h1>EXFOLIANTE - ARCILLA VERDE (50g)  $120.00</h1>
            <p>Ideal para pieles grasas. Eficaz para combatir acné e
            imperfecciones ya que es antimicrobiana y antimicótica.</p>
        </div>
        <img src="masc1.jpg" class="img" >
    </div>

    <div class="product-container">
        <div class="text-container">
            <h1>REJUVENECEDORA - ARCILLA BLANCA (50g) $120.00</h1>
            <p>Ideal para pieles maduras, secas y/o sensibles. Hidratante,
            revitalizante y excelente para disminuir las líneas de expresión.</p>
        </div>
        <img src="masc2.jpg" class="img" >
    </div>

    <div class="product-container">
        <div class="text-container">
            <h1>ANTIOXIDANTE- ARCILLA ROJA (50g) $120</h1>
            <p>Ideal para pieles mixtas. Hidratante, cicatrizante, antioxidante,
            aclara y desvanece manchas.</p>
        </div>
        <img src="masc3.jpg" class="img" >
    </div>

    

    <h1>Modo de aplicación:</h1>
    <p>
    *Mezclar la cantidad deseada hasta homogeneizar, hidratar si se desea.<br>
    *Aplicar en rostro y cuello previamente lavados.<br>
    *Dejar actuar 15-20 minutos.<br>
    *Enjuagar con abundante agua.<br>
    *Continuar rutina de skincare.</p>

    <H1>Recomendaciones generales:</H1>
    <p>*Si se desea tener una consistencia con mayor fluidez, se puede adicionar agua de
    garrafón o algún tónico a la cantidad de mascarilla que se vaya a utilizar.<br>
    *Se recomienda aplicar 2- 3 veces por semana. Cada piel es distinta.<br>
    *Si se tiene piel sensible y/o alergias se puede colocar una pequeña cantidad en el
    cuello para verificar que no hay irritación.<br>
    *Se recomienda mantener en un lugar fresco, sin luz solar directa. De preferencia en
    refrigeración.</p>

        
</body>
</html>
