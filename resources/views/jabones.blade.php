<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="is-authenticated" content="{{ Auth::check() ? 'true' : 'false' }}">

    <title>Cactacea</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #FDF5D7;
            color: #1D2A54;
            font-family: 'Raleway', sans-serif4;
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
            <h1>JABÓN DE CAFÉ (100g) $70.00</h1>
            <p>Elaborado con aceites y mantecas vegetales de la mejor
            calidad y café de grano mexicano. Exfoliante, ayuda a
            mejorar la circulación, da vitalidad y firmeza a tu piel.</p>
        </div>
        <img src="jab1.webp" class="img" >
        @auth
        <button class="add-to-cart" data-name="Jabón-Cafe" data-price="$70">Agregar al carrito</button>
    @endauth

    @guest
        <p><em>Inicia sesión</em></p>
    @endguest
    </div>

    <div class="product-container">
        <div class="text-container">
            <h1>JABÓN DE MENTA Y ALOE VERA (100g) $70.00</h1>
            <p>Elaborado con aceites y mantecas vegetales, gel de aloe
            vera y menta. Hidratante, refrescante, ayuda a mantener la
            piel tersa y suave.</p>
        </div>
        <img src="jab2.webp" class="img" >
        @auth
        <button class="add-to-cart" data-name="Jabón-MentayAloe" data-price="$70">Agregar al carrito</button>
    @endauth

    @guest
        <p><em>Inicia sesión</em></p>
    @endguest
    </div>

    <div class="product-container">
        <div class="text-container">
            <h1>JABÓN DE AVENA Y LECHE (100g) $70.00 </h1>
            <p>Elaborado con aceites y mantecas vegetales y una rica mezcla
            de avena y leche. Hidratante, limpia los poros y equilibra el pH
            de tu piel, por lo que ayuda a combatir irritaciones.</p>
        </div>
        <img src="jab3.webp" class="img" >
        @auth
        <button class="add-to-cart" data-name="Jabón-AvenayLeche" data-price="$70">Agregar al carrito</button>
    @endauth

    @guest
        <p><em>Inicia sesión </em></p>
    @endguest
    </div>

    <div class="product-container">
        <div class="text-container">
            <h1>JABÓN DE ARCILLA VERDE (100g) $80.00 </h1>
            <p>Elaborado con aceites y mantecas vegetales, aceite de aguacate,
            arcilla verde y aceite esencial de árbol de té. Ideal para pieles
            grasas o con tendencia al acné. Limpia a profundidad,
            antimicrobiano.</p>
        </div>
        <img src="jab4.webp" class="img" >
        @auth
        <button class="Jabón-Arcillaverde" data-name="Sales-AlcanforYAloe" data-price="$80">Agregar al carrito</button>
    @endauth

    @guest
        <p><em>Inicia sesión </em></p>
    @endguest
    </div>

    <div class="product-container">
        <div class="text-container">
            <h1>JABÓN DE ARCILLA ROJA (100g) $80.00 </h1>
            <p>Elaborado con aceites y mantecas vegetales, arcilla roja, agua
            de rosas y aceite esencial de lavanda. Ideal para pieles sensibles
            y delicadas. Elimina impurezas, hidrata y regenera la piel,
            dejando el cutis suave.</p>
        </div>
        <img src="jab5.webp" class="img" >
        @auth
        <button class="add-to-cart" data-name="Jabón-ArcillaRoja" data-price="$80">Agregar al carrito</button>
    @endauth

    @guest
        <p><em>Inicia sesión </em></p>
    @endguest
    </div>

    <div class="product-container">
        <div class="text-container">
            <h1>JABÓN DE CARBÓN ACTIVADO (100g) $80.00 </h1>
            <p>Elaborado con aceites y mantecas vegetales, carbón activado y aceite
            esencial de árbol de té. Limpia a profundidad. Antibacterial,
            desintoxicante, seborregulador, desvanece manchas.</p>
        </div>
        <img src="jab6.webp" class="img" >
        @auth
        <button class="add-to-cart" data-name="Jabón-CarbonActivado" data-price="$80">Agregar al carrito</button>
    @endauth

    @guest
        <p><em>Inicia sesión</em></p>
    @endguest
    </div>

    <!-- Botón "Hacer pedido" -->
@auth
    <button id="place-order">Hacer pedido</button>
@endauth

@guest
    <p><em>Inicia sesión para realizar un pedido.</em></p>
@endguest



    <h1>Modo de aplicación:</h1>
    <p>
    Jabones en barra elaborados artesanalmente con aceites y mantecas naturales,
    plantas e ingredientes vegetales y aceites esenciales.</p>

    <p>
    Nuestros jabones son elaborados por saponificación en frío, con este proceso se
    aprovechan todos las propiedades y beneficios de cada uno de los ingredientes
    utilizados.</p>

    <H1>Recomendaciones generales:</H1>
    <p>*Para mayor durabilidad y evita crecimiento de microorganismos coloca tu jabón en un
    lugar que se mantenga seco y sin exposición solar directa.</p>

        
</body>
<!-- Popup para capturar el número de contacto -->
<div id="contact-popup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center;">
    <div style="background: white; padding: 20px; border-radius: 8px; text-align: center;">
        <h2>Ingrese su número de contacto</h2>
        <input type="text" id="contact-number" placeholder="Número de contacto" style="margin: 10px 0; padding: 10px; width: 80%;" />
        <button id="submit-order" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 4px;">Enviar Pedido</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        // Carrito de compras
        let cart = [];

        // Mostrar popup para ingresar número de contacto
        function showContactPopup() {
            const popupHtml = `
                <div id="contact-popup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center;">
                    <div style="background: white; padding: 20px; border-radius: 8px; text-align: center; width: 300px;">
                        <h2>Ingrese su número de contacto</h2>
                        <input type="text" id="contact-number" placeholder="Número de contacto" style="margin: 10px 0; padding: 10px; width: 90%;" />
                        <div style="margin-top: 15px;">
                            <button id="submit-order" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 4px;">Enviar Pedido</button>
                            <button id="cancel-order" style="padding: 10px 20px; background: #dc3545; color: white; border: none; border-radius: 4px; margin-left: 10px;">Cancelar</button>
                        </div>
                    </div>
                </div>
            `;
            $('body').append(popupHtml);

            // Acción para enviar pedido
            $('#submit-order').on('click', function () {
                const contactNumber = $('#contact-number').val();
                if (!contactNumber) {
                    alert('Por favor, ingrese su número de contacto.');
                    return;
                }

                sendOrder(contactNumber);
                $('#contact-popup').remove();
            });

            // Acción para cancelar el pedido
            $('#cancel-order').on('click', function () {
                $('#contact-popup').remove();
            });
        }

        // Agregar producto al carrito
        $('.add-to-cart').on('click', function () {
            const productName = $(this).data('name');
            const productPrice = $(this).data('price');

            cart.push({ name: productName, price: productPrice });

            alert(`${productName} ha sido agregado al carrito.`);
        });

        // Mostrar popup al hacer pedido
        $('#place-order').on('click', function () {
            if (cart.length === 0) {
                alert('El carrito está vacío.');
                return;
            }

            showContactPopup(); // Mostrar el popup para el número de contacto
        });

        // Enviar pedido al servidor
        function sendOrder(contactNumber) {
            $.ajax({
                url: '/send-order',
                type: 'POST',
                data: { 
                    cart: cart,
                    contact_number: contactNumber 
                },
                success: function (response) {
                    if (response && response.message) {
                        alert(response.message);
                        cart = []; // Vaciar el carrito después de realizar el pedido
                    } else {
                        alert('Pedido enviado, pero la respuesta fue inesperada.');
                    }
                },
                error: function (xhr) {
                    let errorMessage = 'Error al enviar el pedido.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    alert(errorMessage);
                }
            });
        }
    });
</script>

</html>
