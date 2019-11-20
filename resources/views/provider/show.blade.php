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
                    <h1 class="title is-1">Proveedor {{$providers->name }}</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/provider">Proveedores</a></li>
                <li><a href="#">detalle</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="notification">
            <div class="columns">
                <div class="column">
                    <h1 class="title is-3" style="font-weight: 300">
                        Proveedor
                    </h1>
                </div>
                <div class="column">
                </div>
                <div class="column ">
                    <a class="button is-info is-three-half" href="{{ route('provider.edit', $providers->id) }}">Editar Proveedor</a>
                    <a class="button is-info is-pulled-right" href="{{ route('provider.index') }}"> Ir a Lista</a>
                </div>
            </div>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $providers->name }}
                        </td>
                        <td>
                            {{ $providers->addres }}
                        </td>
                        <td>
                            {{ $providers->phone }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>