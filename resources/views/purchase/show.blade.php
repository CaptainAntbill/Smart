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
    <dl>
        <dt>Orden</dt>
        <dd>{{ $purchases->order }}</dd>
        <dt>Precio</dt>
        <dd>{{ $purchases->price }}</dd>
        <dt>Fecha de orden</dt>
        <dd>{{ $purchases->date_order }}</dd>
        <dt>Proveedor</dt>
        <dd>{{ $purchases->provider['name']}}</dd>
        <dt>Modelo del Telefono</dt>
        <dd>{{ $purchases->phone['model']}}</dd>


    </dl>
    <a href="{{ route('phone.index') }}">Lista</a>
</body>

</html>