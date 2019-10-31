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
    <form action="{{ route('provider.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" required placeholder="Nombre Proveedor" value=""><br>
        <input type="text" name="name" required placeholder="Direccion" value=""><br>
        <input type="text" name="name" required placeholder="Telefono" value=""><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>