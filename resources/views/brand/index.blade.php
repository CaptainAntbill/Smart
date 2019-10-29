<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="notification">
            <table class="table is-fullwidth">
                <tr>
                    <th>Nombre Completo</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach($brands as $c)
                <tr>
                    <td>{{ $c->name }}</td>
                    <td><a href="{{ route('brand.create') }}">Nuevo</a></td>
                    <td><a href="{{ route('brand.show', $c->id) }}">Detalle</a></td>
                    <td><a href="{{ route('brand.edit', $c->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>