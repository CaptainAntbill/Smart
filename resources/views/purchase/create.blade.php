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
                    <h1 class="title is-1">Nueva Orden</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb is-medium has-bullet-separator">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/purchase">Pedidos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="notification">
            <form action="{{ route('purchase.store') }}" method="post">
                {{ csrf_field() }}
                <div class="field">
                    <label for="punteo" class="label">Orden</label>
                    <div class="control">
                        <input type="text" name="order" class="input" required ">
                </div>
            </div>
                <div class=" field">
                        <label for="punteo" class="label">Precio</label>
                        <div class="control">
                            <input type="text" name="price" class="input" required ">
                </div>
            </div>
            <div class=" field">
                            <label for="punteo" class="label">Fecha</label>
                            <div class="control">
                                <input type="text" name="date_order" class="input" required>
                            </div>
                        </div>
                        <select name="provider_id" class="select">
                            @foreach($provider as $provider)
                            <option value="{{$provider['id']}}"> {{$provider['name']}} </option>
                            @endforeach
                        </select>
                        <select name="phone_id" class="select">
                            @foreach($phone as $phone)
                            <option value="{{$phone['id']}}"> {{$phone['model']}} </option>
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