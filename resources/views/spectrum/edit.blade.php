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
                    <h1 class="title is-1">Editar Gama</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb is-medium has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/spectrum">Gama</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="notification">
            <form action="{{ route('spectrum.update', $spectrums->id) }}" method="post">
                @csrf
                @method('PATCH')
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Nombre</label>
                    <div class="control">
                        <input type="text" name="type_spectrum" class="input" value=" {{ $spectrums->type_spectrum }}" required pattern="[a-zA-Z0-9_ ]{5,50}$">
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