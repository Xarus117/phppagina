<?php
include "conn.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

if (isset($_POST["disponible"])) {
    $disponible = true;
    echo "disponible";
} else {
    $disponible = false;
    echo "no disponible";
}

if (!$con) {
    die(
        "No se ha podido realizar la conexión_" .
            mysqli_connect_error() .
            "<br>"
    );
} else {
    echo "Se ha establecido correctamente la conexión a la base de datos";

        $sql = "INSERT INTO `productos`(`id`,`nombre`, `precio`, `cantidad`, `disponible`) 
        VALUES (NULL,'$nombre','$precio','$cantidad','$disponible')";

        $result = mysqli_query($con, $sql);
}

header("Location: insertar.html");
exit();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Insertar</title>
    <link rel="stylesheet" href="./index.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./insertar.html">Insertar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./leer.php">Leer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./eliminar.html">Eliminar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body class="p-3 mb-2 bg-dark text-white">
    <br><br>
    <h1 class="display-2" id="titulo">Insertar</h1><br><br>

    <div id="form">

        <form action="./insertar.php" class="p-3 mb-3 bg-light text-dark border border-3" id="form" method="post">
            <div>
                <label for="exampleInputEmail1">Nombre:</label>
                <input name="nombre" type="text" class="form-control" id="exampleInputEmail1"
                    placeholder="Nombre del producto">
                <label for="exampleInputEmail1">Precio:</label>
                <input name="precio" type="number" class="form-control" id="exampleInputEmail1"
                    placeholder="Precio del producto">
                <label for="exampleInputEmail1">Cantidad:</label>
                <input name="cantidad" type="number" class="form-control" id="exampleInputEmail1"
                    placeholder="Cantidad del producto">
                <label for="exampleInputEmail1">Disponible:</label><br>
                <input name="disponible" type="checkbox" id="exampleInputEmail1">
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Insertar</button>
            </div>
        </form>



        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

<footer>

</footer>

</html>