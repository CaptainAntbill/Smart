<!DOCTYPE html>
<html lang="en">

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
                    <h1 class="title is-1">Editar un Cliente</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/client">Clientes</a></li>
                <li><a href="#">Agregar</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="notification">
            <form action="{{ route('client.update', $client->id) }}" method="post">
                @csrf
                @method('PATCH')
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Nombre</label>
                    <div class="control">
                        <input type="text" name="name" class="input" value=" {{ $client->name }}" required pattern="[a-zA-Z0-9_ ]{5,50}$">
                    </div>
                </div>
                <div class="field">
                    <label for="punteo" class="label">Telefono</label>
                    <div class="control">
                        <input type="text" name="phone" value="{{ $client->phone }}" class="input" required ">
                </div>
            </div>
            <div class=" field">
                        <div class="control">
                            <button type="submit" class="button is-info">
                                Enviar
                            </button>
                        </div>
                    </div>
            </form>
        </div><br><br>
</body>

</html>