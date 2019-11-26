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
                    <h1 class="title is-3">Modelo: {{$phones->model }}</h1>
                    <h1 class="title is-3">Marca: {{ $phones->brand['name']}}</h1>
                    <h1 class="title is-3">Gama: {{ $phones->spectrum['type_spectrum'] }}</h1>
                </div>
            </div>
        </div>
    </div> <br>
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
            <form action="{{ route('phone.update', $phones->id) }}" method="post">
                @csrf
                @method('PATCH')
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Nombre</label>
                    <div class="control">
                        <input type="text" name="model" value="{{ $phones->model }}" class=" input" required pattern="[a-zA-Z0-9_ ]{5,50}$">
                    </div>
                </div>
                <div class="field">
                    <label for="punteo" class="label">Cantidad</label>
                    <div class="control">
                        <input type="text" name="quantity" value="{{ $phones->quantity }}" class="input" required ">
                </div>
            </div>
            <div class=" field">
                        <label for="punteo" class="label">Precio</label>
                        <div class="control">
                            <input type="text" name="price" value="{{ $phones->price }}" class="input" required>
                        </div>
                    </div>
                    <select name="brand_id" class="select">
                        @foreach($brand as $brand)
                        <option value="{{$brand['id']}}"> {{$brand['name']}} </option>
                        @endforeach
                    </select>
                    <select name="spectrum_id" class="select">
                        @foreach($spectrum as $spectrum)
                        <option value="{{$spectrum['id']}}"> {{$spectrum['type_spectrum']}} </option>
                        @endforeach
                    </select>
                    <div class=" field">
                        <div class="control"><br>
                            <button type="submit" class="button is-info">
                                Enviar
                            </button>
                        </div>
                    </div>
            </form>
        </div><br><br>
</body>

</html>