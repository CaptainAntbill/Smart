<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="notification">
            <table class="table is-fullwidth">
                <tr>
                    <th>Pedido</th>
                    <th>Precio</th>
                    <th>Fecha de Pedido</th>
                    <th>Accesorio</th>
                    <th>Proveedor</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach($purchases as $a)
                <tr>
                    <td>{{ $a->order }}</td>
                    <td>{{ $a->price }}</td>
                    <td>{{ $a->date_order }}</td>
                    <td>{{ $a->accessory->name }}</td>
                    <td>{{ $a->provider->name }}</td>
                    <td><a href="{{ route('purchase_accessory.create') }}">Nuevo</a></td>
                    <td><a href="{{ route('purchase_accessory.show', $a->id) }}">Detalle</a></td>
                    <td><a href="{{ route('purchase_accessory.edit', $a->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>