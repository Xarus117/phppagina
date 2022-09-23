<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "crub";

$filtro = $_POST["filtro"];
$valorfiltro = $_POST["valorfiltro"];

if ($filtro == 1) {
    $filtro = "nombre";
} elseif ($filtro == 2) {
    $filtro = "precio";
} else {
    $filtro = "cantidad";
}

$con = mysqli_connect($servidor, $usuario, $password, $bd);
if (!$con) {
    die(
        "No se ha podido realizar la conexión_" .
            mysqli_connect_error() .
            "<br>"
    );
} else {

    mysqli_set_charset($con, "utf8");

    if ($filtro == "precio") {
        $sql = "SELECT * FROM `productos` WHERE $filtro = $valorfiltro";
    } elseif ($filtro == "cantidad") {
        $sql = "SELECT * FROM `productos` WHERE $filtro = $valorfiltro";
    } else {
        $sql = "SELECT * FROM `productos` WHERE $filtro = '$valorfiltro'";
    }

    $consulta = mysqli_query($con, $sql);
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Leer (Filtrado)</title>
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
                        <a class="nav-link" aria-current="page" href="./insertar.html">Insertar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./leer.php">Leer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body class="p-3 mb-2 bg-dark text-white">
    <br><br>
    <h1 class="display-2" id="titulo">Leer</h1><br><br>



    <div id="form">
    <p>Filtrar por:</p>    
    <form action="./filtrado.php" method="POST">
    <select name="filtro" id="filtro">
        <option value="1">Nombre</option>
        <option value="2">Precio</option>
        <option value="3">Cantidad</option>
    </select>
    <input name="valorfiltro" type="text">
    <button type="submit" class="btn btn-success">Filtrar</button>
    </form>
    <br><br>
        <div class="p-3 mb-3 bg-light text-dark border border-3">

            <?php while ($fila = $consulta->fetch_assoc()) {
                echo "</br> ";
                echo "<tr> -------------------";
                echo "</br> ";
                echo "<td> Nombre: " . $fila["nombre"] . "</td>";
                echo "</br> ";
                echo "<td> Precio: " . $fila["precio"] . "</td>";
                echo "</br> ";
                echo "<td> Cantidad: " . $fila["cantidad"] . "</td>";
                echo "</br> ";
                if ($fila == true) {
                    echo "<td> Precio: Disponible" . "</td>";
                } else {
                    echo "<td> Precio: No Disponible" . "</td>";
                }
                echo "</tr>";
                echo "</br> ";
            } ?>
        </div>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

<footer>

</footer>

</html>

<?php if (!$consulta) {
    die("No se ha podido realizar el update");
} else {
    echo "La lectura se ha realizado correctamente";
}
}
?>
