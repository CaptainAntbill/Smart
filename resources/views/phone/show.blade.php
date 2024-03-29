<!DOCTYPE html>
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
                    <h1 class="title is-1">{{$phones->model }}</h1>
                </div>
            </div>
        </div>
    </div><br>
    <nav class="breadcrumb is-medium has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/phone">Smartphones</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">

        <div class="notification">
            <div class="columns">
                <div class="column">
                    <h1 class="title is-3" style="font-weight: 300">
                        Smartphone
                    </h1>
                </div>
                <div class="column">
                </div>
                <div class="column ">
                    <a class="button is-info is-three-half" href="{{ route('phone.edit', $phones->id) }}">Editar Dispositivo</a>
                    <a class="button is-info is-pulled-right" href="{{ route('phone.index') }}"> Ir a Lista</a>
                </div>
            </div>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Tipo de Gama</th>
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $phones->model }}
                        </td>
                        <td>
                            {{ $phones->quantity }}
                        </td>
                        <td>
                            {{ $phones->price }}
                        </td>
                        <td>
                            {{ $phones->spectrum['type_spectrum'] }}
                        </td>
                        <td>
                            {{ $phones->brand['name']}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>