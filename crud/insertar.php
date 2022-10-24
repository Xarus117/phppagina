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
                <h3 class="display-3">Insertar</h3>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Producto</label>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre del producto">
            </div><br>
            <div class="form-group">
                <label for="exampleInputPassword1">Precio</label>
                <input name="precio" type="number" class="form-control" placeholder="Precio del producto">
            </div><br>
            <div class="form-group">
                <label for="exampleInputPassword1">Cantidad</label>
                <input name="cantidad" type="number" class="form-control" placeholder="Cantidad del producto">
            </div><br>
            <div class="form-check">
                <label class="form-check-label">Disponible</label>
                <input type="hidden" name="disponible" value="0" />
                <input type="checkbox" name="disponible" value="1">
            </div><br>
            <div class="intro">
                <button type="submit" name="insertar" class="btn btn-primary">Insertar</button><br><br>
                <a type="submit" name="volver" href="./leer.php" class="btn btn-secondary">Volver</a>
            </div>

        </div>
    </form>
</body>

</html>