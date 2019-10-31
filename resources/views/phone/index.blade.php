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
                    <th>Modelo</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Tipo de Gama</th>
                    <th>Marca</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach($phone as $c)
                <tr>
                    <td>{{ $c->model }}</td>
                    <td>{{ $c->quantity }}</td>
                    <td>{{ $c->price }}</td>
                    <td>{{ $c->spectrum->type_spectrum }}</td>
                    <td>{{ $c->brand->name }}</td>
                    <td><a href="{{ route('phone.create') }}">Nuevo</a></td>
                    <td><a href="{{ route('phone.show', $c->id) }}">Detalle</a></td>
                    <td><a href="{{ route('phone.edit', $c->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>