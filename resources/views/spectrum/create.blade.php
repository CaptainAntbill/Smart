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
                    <h1 class="title is-1">Nuevo Tipo de Gamma</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/brand">Gammas</a></li>
                <li><a href="#">Agregar</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="notification">
            <form action="{{ route('spectrum.store') }}" method="post">
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Nombre</label>
                    <div class="control">
                        <input type="text" name="type_spectrum" class="input" required pattern="[a-zA-Z0-9_ ]{5,50}$">
                    </div>
                </div>
                <div class=" field">
                    <div class="control"><br>
                        <button type="submit" class="button is-info">
                            Enviar
                        </button>
                    </div>
                </div>
        </div><br><br>
        </form>
</body>

</html>