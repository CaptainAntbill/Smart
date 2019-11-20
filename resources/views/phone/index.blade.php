<html style="background-color:#1d2533" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body><br>
    <div class="container">
        <div class="hero is-success is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">Smartphones</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb breadcrumb is-medium has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/phone">Smartphones</a></li>
            </ul>
    </nav>
    <div class="container">
        <div class="notification">
            <div class="level">
                <div class="level-left">
                    <a class="button is-medium is-info" href="{{ route('phone.create') }}">Nuevo</a>
                </div>
            </div>
            <table class=" table is-fullwidth">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Tipo de Gama</th>
                        <th>Marca</th>
                    </tr>
                    @foreach($phone as $c)
                    <tr>
                        <td><a href="{{ route('phone.show', $c->id) }}">{{ $c->model }}</td></a>
                        <td>{{ $c->quantity }}</td>
                        <td>{{ $c->price }}</td>
                        <td>{{ $c->spectrum->type_spectrum }}</td>
                        <td>{{ $c->brand->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div><br>
    </div>
</body>

</html>