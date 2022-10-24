<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="p-3 mb-2 bg-dark bg-gradient text-white">
    <form action="sql.php" method="post">
        <div class="centrar">
            <div class="intro">
                <h3 class="display-3">Eliminar</h3>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input name="id" type="number" class="form-control" placeholder="ID del producto">
            </div><br>
            <div class="intro">
                <button type="submit" name="eliminar" class="btn btn-primary">Eliminar</button><br><br>
                <a type="submit" name="volver" href="./leer.php" class="btn btn-secondary">Volver</a>
            </div>

        </div>
    </form>
</body>

</html>