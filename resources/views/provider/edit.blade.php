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
    <form action="{{ route('provider.update', $providers->id) }}" method="post">
        @csrf
        @method('PATCH')
        {{ csrf_field() }}
        <input type="text" name="name" required placeholder="Nombre Completo" value="{{ $providers->name }}"><br>
        <input type="text" name="addres" required placeholder="Fecha Nacimiento" value="{{ $providers->addres }}"><br>
        <input type="text" name="phone" required placeholder="Es activo?" value="{{ $providers->phone }}"><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>