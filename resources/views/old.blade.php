
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OLD</title>
</head>
<body>
    <h1>Registro</h1>
    <form action="/register" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ old('name') }}"><br>
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" value="{{ old('lastname') }}">
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>