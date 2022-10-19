<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="p-3 mb-2 bg-dark bg-gradient text-white">
<div class="intro">
        <h1 class="display-1">Insertar</h1>
        <h2 class="display-4">Por Xarus</h2>
    </div>
    <form action="sql.php" method="post">
        <div class="d-flex justify-content-center flex-column">
            <div class="form-group">
                <label>Producto</label>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre del producto">
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input name="precio" type="number" class="form-control" placeholder="Precio del producto">
            </div>
            <div class="form-group">
                <label>Cantidad</label>
                <input name="cantidad" type="number" class="form-control" placeholder="Cantidad del producto">
            </div>
            <div class="form-check">
                <input name="disponible" type="checkbox" class="form-check-input" id="checkdisponible">
                <label class="form-check-label" for="checkdisponible">Disponible</label>
            </div>
            <button type="submit" name="insertar" class="btn btn-primary">Insertar</button>
        </div>
    </form>
</body>
</html>