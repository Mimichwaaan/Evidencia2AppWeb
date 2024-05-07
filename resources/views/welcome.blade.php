<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            text-align: center;
        }

        input[type="text"] {
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .order-info {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .order-info h2 {
            margin-bottom: 10px;
        }

        .order-info p {
            margin-bottom: 5px;
        }

        .order-photo img {
            max-width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>

        <!-- Formulario de búsqueda -->
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="invoice_number" placeholder="Buscar por número de factura">
            <button type="submit">Buscar</button>
        </form>

        <!-- Mostrar resultado de la búsqueda -->
        @if(isset($order))
            <div class="order-info">
                <h2>Información de la orden:</h2>
                <p>Número de factura: {{ $order->invoice_number }}</p>
                <p>Estado: {{ $order->status }}</p>
                <!-- Mostrar foto de la orden si está entregada -->
                @if($order->status === 'delivered')
                    <div class="order-photo">
                        <img src="{{ $order->orderPhotos()->where('photo_type', 'delivered')->first()->photo_url }}" alt="Foto de la orden entregada">
                    </div>
                @endif
            </div>
        @endif
    </div>
</body>
</html>
