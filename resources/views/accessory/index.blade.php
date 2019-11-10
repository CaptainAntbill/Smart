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
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Marca</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach($accessory as $c)
                <tr>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->price }}</td>
                    <td>{{ $c->quantity }}</td>
                    <td>{{ $c->brand->name }}</td>
                    <td><a href="{{ route('accessory.create') }}">Nuevo</a></td>
                    <td><a href="{{ route('accessory.show', $c->id) }}">Detalle</a></td>
                    <td><a href="{{ route('accessory.edit', $c->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>