<!DOCTYPE html>
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
                    <h1 class="title is-1">Registro</h1>
                </div>
            </div>
        </div>
    </div><br>
    <nav class="breadcrumb has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/purchase">Pedidos</a></li>
                <li><a href="#">detalle</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">

        <div class="notification">
            <div class="columns">
                <div class="column">
                    <h1 class="title is-3" style="font-weight: 300">
                        Informacion
                    </h1>
                </div>
                <div class="column">
                </div>
                <div class="column ">
                    <a class="button is-info is-three-half" href="{{ route('purchase.edit', $purchases->id) }}">Editar Informacion</a>
                    <a class="button is-info is-pulled-right" href="{{ route('purchase.index') }}"> Ir a Lista</a>
                </div>
            </div>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Pedido</th>
                        <th>Precio</th>
                        <th>Fecha de Pedido</th>
                        <th>Proveedor</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $purchases->order }}
                        </td>
                        <td>
                            {{ $purchases->price }}
                        </td>
                        <td>
                            {{ $purchases->date_order }}
                        </td>
                        <td>
                            {{ $purchases->provider['name']}}
                        </td>
                        <td>
                            {{ $purchases->phone['model']}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>