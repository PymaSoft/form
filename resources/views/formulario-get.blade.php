<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    <form action="{{ route('form-get' )}}">  {{-- ruta absoluta --}}
        <input type="text" name="search">
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>