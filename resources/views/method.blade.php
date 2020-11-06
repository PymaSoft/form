<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>METHOD</title>
</head>
<body>
    <h1>Ejemplo de eliminar</h1>
    <form action="/{id}" method="POST">
        @method('delete')
        @csrf
        <input type="submit" value="ELIMINAR">
    </form>
    <h1>Ejemplo de actualizar</h1>
    <form action="/{id}" method="POST">
        @method('put')
        @csrf
        <label for="email">Email</label>
        <input type="text" value="admin@admin.com" name="email">
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>