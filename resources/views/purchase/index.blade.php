<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body><br>
    <div class="container">
        <div class="hero is-link">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">Registro de Dispositivos</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb breadcrumb has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/purchase">Pedidos</a></li>
            </ul>
    </nav>
    <div class="container">
        <div class="notification">
            <div class="level">
                <div class="level-left">
                    <a class="button is-info" href="{{ route('purchase.create') }}">Nuevo</a>
                </div>
            </div>
            <table class=" table is-fullwidth">
                <thead>
                    <tr>
                        <th>Pedido</th>
                        <th>Precio</th>
                        <th>Fecha de Pedido</th>
                        <th>Telefono</th>
                        <th>Marca</th>
                        <th>Proveedor</th>
                    </tr>
                    @foreach($purchase as $c)
                    <tr>
                        <td><a href="{{ route('purchase.show', $c->id) }}">{{ $c->order }}</td></a>
                        <td>{{ $c->price }}</td>
                        <td>{{ $c->date_order }}</td>
                        <td>{{ $c->phone->model }}</td>
                        <td>{{ $c->phone->brand->name }}</td>
                        <td>{{ $c->provider->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div><br>
    </div>
</body>

</html>