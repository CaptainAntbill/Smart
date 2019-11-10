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
    <form action="{{ route('accessory.update', $accessories->id) }}" method="post">
        @csrf
        @method('PATCH')
        {{ csrf_field() }}
        <input type="text" name="name" required placeholder="Modelo" value="{{ $accessories->name }}"><br>
        <input type="text" name="quantity" required placeholder="Cantidad" value="{{ $accessories->quantity }}"><br>
        <input type="text" name="price" required placeholder="Precio" value="{{ $accessories->price }}"><br>
        <select name="brand_id" class="select">
            @foreach($brand as $brand)
            <option value="{{$brand['id']}}"> {{$brand['name']}} </option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>