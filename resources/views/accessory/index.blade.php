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
                    <h1 class="title is-1">Accesorios</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb is-medium breadcrumb has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/accessory">Accesorios</a></li>
            </ul>
    </nav>
    <div class="container">
        <div class="notification">
            <div class="level">
                <div class="level-left">
                    <a class="button is-info" href="{{ route('accessory.create') }}">Nuevo</a>
                </div>
            </div>
            <table class=" table is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Marca</th>
                        <th></th>
                    </tr>
                    @foreach($accessory as $c)
                    <tr>
                        <td><a href="{{ route('accessory.show', $c->id) }}">{{ $c->name }}</td></a>
                        <td>{{ $c->price }}</td>
                        <td>{{ $c->quantity }}</td>
                        <td>{{ $c->brand->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div><br>
    </div>
</body>

</html>