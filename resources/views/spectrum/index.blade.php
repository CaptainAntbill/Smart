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
                    <th>Nombre</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach($spectrums as $c)
                <tr>
                    <td>{{ $c->type_spectrum }}</td>
                    <td><a href="{{ route('spectrum.create') }}">Nuevo</a></td>
                    <td><a href="{{ route('spectrum.show', $c->id) }}">Detalle</a></td>
                    <td><a href="{{ route('spectrum.edit', $c->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>