<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body><br>    
    </div>
    <div class="container">
        <div class="hero is-link">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">Registro de Accesorios</h1>
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
                    <a class="button is-info" href="{{ route('purchase_accessory.create') }}">Nuevo</a>
                </div>
            </div>
            <table class=" table is-fullwidth">
                <thead>
                    <tr>
                        <th>Pedido</th>
                        <th>Precio</th>
                        <th>Fecha de Pedido</th>
                        <th>Accesorio</th>
                        <th>Proveedor</th>
                    </tr>
                    @foreach($purchases as $a)
                    <tr>
                        <td><a href="{{ route('purchase_accessory.show', $a->id) }}">{{ $a->order }}</td></a>
                        <td>{{ $a->price }}</td>
                        <td>{{ $a->date_order }}</td>
                        <td>{{ $a->accessory->name }}</td>
                        <td>{{ $a->provider->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div><br>
    </div>
</body>

</html>