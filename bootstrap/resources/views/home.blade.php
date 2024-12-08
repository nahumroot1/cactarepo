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
    gap: 10px;
}

.img {
    width: 18.9%; /* Tamaño general para pantallas grandes */
    height: auto;
}

.contenedor {
    display: flex; 
    align-items: center;
    gap: 20px;
    max-width: 1200px;
    margin: 20px auto;
}

/* Ajustes para pantallas medianas */
@media (max-width: 768px) {
    /* Para la sección de imágenes */
    .img {
        width: 32%; /* Las imágenes toman más espacio en pantallas medianas */
    }

    /* Para la sección de contenido */
    .contenedor {
        flex-direction: column; /* Cambia a diseño vertical */
        align-items: center;
        text-align: center;
    }

    .img2 {
        width: 250px; /* Ajusta el tamaño de la imagen del logo */
        height: auto;
    }

    .texto h1 {
        font-size: 28px; /* Ajusta el tamaño del encabezado */
    }

    .texto p {
        font-size: 20px; /* Ajusta el tamaño del texto del párrafo */
    }
}

/* Ajustes para pantallas pequeñas */
@media (max-width: 480px) {
    /* Para la sección de imágenes */
    .img {
        width: 100%; /* Las imágenes ocupan el 100% en pantallas pequeñas */
        margin-bottom: 10px;
    }

    /* Para la sección de contenido */
    .contenedor {
        flex-direction: column; /* Mantiene el diseño vertical */
        text-align: center;
    }

    .img2 {
        width: 200px; /* Reduce el tamaño de la imagen del logo */
        height: auto;
    }

    .texto h1 {
        font-size: 24px; /* Reduce el tamaño del encabezado */
    }

    .texto p {
        font-size: 16px; /* Reduce el tamaño del párrafo */
    }
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

        .texto h1{
                margin: 0;
                font-size: 37px;
            }

            .texto p{
                margin-top: 5px;
                font-size: 25px;
                font-weight: bold;
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

                          <h1>MISIÓN</h1> 
                        <p>Proporcionamos a la comunidad una gama de productos de higiene y cuidado
                        personal seguros y eficaces, en beneficio de nuestros clientes, colaboradores y el
                        medio ambiente.</p>

                          <h1>VISIÓN</h1> 
                        <p>Cactácea es una empresa líder en la formulación y distribución a nivel Nacional de
                        prodcutos de origen natural, destacándose por su innovación, confiabilidad y
                        sevicio al cliente.</p>

                    </div>
          </div>
</body>
</html>
