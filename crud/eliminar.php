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
        <h1 class="display-1">Eliminar</h1>
        <h2 class="display-4">Por Xarus</h2>
    </div>
    <form action="sql.php" method="post">
        <div class="d-flex justify-content-center flex-column">
            <div class="form-group">
                <label>ID</label>
                <input name="id" type="number" class="form-control" placeholder="ID del producto">
        </div>
        <button type="submit" name="eliminar" class="btn btn-primary">Insertar</button>
    </form>
</body>
</html>