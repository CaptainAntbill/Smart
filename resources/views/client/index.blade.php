<!DOCTYPE html>
<html style="background-color:#E5E5E5" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head><br>

<body>
    <div class="container">
        <div class="hero is-link">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">Clientes</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/client">Clientes</a></li>
            </ul>
    </nav>
    <div class="container">
        <div class="notification">
            <div class="level">
                <div class="level-left">
                    <a class="button is-info" href="{{ route('client.create') }}">Nuevo</a>
                </div>
            </div>
            <table class=" table is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th></th>
                    </tr>
                    @foreach($client as $c)
                    <tr>
                        <td><a href="{{ route('client.show', $c->id) }}">{{ $c->name }}</td></a>
                        <td>{{ $c->phone }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div><br>
    </div>
</body>

</html>