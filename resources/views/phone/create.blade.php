<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <br>
    <form action="{{ route('phone.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="model" required placeholder="Modelo" value="" class="input"><br><br>
        <input type="text" name="quantity" required placeholder="Cantidad" value="" class="input"><br><br>
        <input type="text" name="price" required placeholder="Price" value="" class="input"><br><br>

        <select name="spectrum_id" class="select">
            @foreach($spectrum as $spectrum)
            <option value="{{$spectrum['id']}}"> {{$spectrum['type_spectrum']}} </option>
            @endforeach
        </select>

        <select name="brand_id" class="select">
            @foreach($brand as $brand)
                <option value="{{$brand['id']}}"> {{$brand['name']}} </option>
            @endforeach
        </select>
        <input type="submit" value="Enviar" class="button is-primary">
    </form>

</body>

</html>