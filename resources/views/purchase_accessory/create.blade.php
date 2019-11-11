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
    <form action="{{ route('purchase_accessory.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="order" required placeholder="Modelo" value="" class="input"><br><br>
        <input type="text" name="price" required placeholder="Cantidad" value="" class="input"><br><br>
        <input type="text" name="date_order" required placeholder="Price" value="" class="input"><br><br>

        <select name="provider_id" class="select">
            @foreach($provider as $provider)
            <option value="{{$provider['id']}}"> {{$provider['name']}} </option>
            @endforeach
        </select>
        <select name="accessory_id" class="select">
            @foreach($accessory as $accessory)
            <option value="{{$accessory['id']}}"> {{$accessory['name']}} </option>
            @endforeach
        </select>
        <input type="submit" value="Enviar" class="button is-primary">
    </form>
</body>

</html>