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
                    <th>Nombre Completo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach($providers as $c)
                <tr>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->addres }}</td>
                    <td>{{ $c->phone }}</td>
                    <td><a href="{{ route('provider.create') }}">Nuevo</a></td>
                    <td><a href="{{ route('provider.show', $c->id) }}">Detalle</a></td>
                    <td><a href="{{ route('provider.edit', $c->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>