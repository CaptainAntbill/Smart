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
                    <th>Telefono</th>
                    <th>Marca</th>
                    <th>Proveedor</th> 
                    <th> </th>
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach($purchase as $c)
                <tr>
                    <td>{{ $c->order }}</td>
                    <td>{{ $c->price }}</td>
                    <td>{{ $c->date_order }}</td>
                    <td>{{ $c->phone->model }}</td>
                    <td>{{ $c->phone->brand->name }}</td>
                    <td>{{ $c->provider->name }}</td>
                    <td><a href="{{ route('purchase.create') }}">Nuevo</a></td>
                    <td><a href="{{ route('purchase.show', $c->id) }}">Detalle</a></td>
                    <td><a href="{{ route('purchase.edit', $c->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>