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
                    <h1 class="title is-1">Tipos de Gamma</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb is-medium has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/spectrum">Gammas</a></li>
            </ul>
    </nav>
    <div class="container">
        <div class="notification">
            <div class="level">
                <div class="level-left">
                    <a class="button is-info" href="{{ route('spectrum.create') }}">Nuevo</a>
                </div>
            </div>
            <table class=" table is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                    @foreach($spectrums as $c)
                    <tr>
                        <td><a href="{{ route('spectrum.show', $c->id) }}">{{ $c->type_spectrum }}</td></a>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div><br>
    </div>
</body>

</html>