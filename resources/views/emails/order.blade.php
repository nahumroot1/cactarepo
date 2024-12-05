<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Pedido</title>
</head>
<body>
    <h1>Detalles del Pedido</h1>
    <ul>
        @foreach ($cart as $item)
            <li>{{ $item['name'] }} - {{ $item['price'] }}</li>
        @endforeach
    </ul>

    <h2>Contacto</h2>
    <p><strong>Teléfono:</strong> {{ $contactNumber }}</p>
</body>
</html>

