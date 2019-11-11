<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Document</title>
</head>

<body>
    <form action="{{ route('purchase_accessory.update', $purchase->id) }}" method="post">
        @csrf
        @method('PATCH')
        {{ csrf_field() }}
        <input type="text" name="order" required placeholder="Orden" value="{{ $purchase->order }}"><br>
        <input type="text" name="price" required placeholder="Precio" value="{{ $purchase->price }}"><br>
        <input type="text" name="date_order" required placeholder="Fecha de Orden" value="{{ $purchase->date_order }}"><br>
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
        <input type="submit" value="Enviar">
    </form>

</body>

</html>