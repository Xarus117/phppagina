<?php
session_start();
include "conn.php";
?>
<p class="h4">
</p>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Leer</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>

</head>

<header>
    <?php
    $sql2 = "SELECT * FROM `usuarios`";
    $run2 = mysqli_query($conn, $sql2);
    $contador_admin = 0;

    while ($fila = $run2->fetch_assoc()) {
        if ($fila['mote'] == $_SESSION['mote'] && $fila['admin'] == 1) {
            $contador_admin = 1;
        }
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if ($contador_admin == 1) {
                    ?>
                        <li class="nav-item">
                            <a href="./insertar.php" class="btn btn-primary">Insertar</a>
                        </li>
                        <li class="nav-item">
                            <a href="./eliminar.php" class="btn btn-primary">Eliminar</a>
                        </li>
                        <li class="nav-item">
                            <a href="./actualizar.php" class="btn btn-primary">Actualizar</a>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a href="./leer.php" class="btn btn-primary">Leer</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <form action="./sql.php" method="post"><br>
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>

</header>

<body class="p-3 mb-2 bg-dark bg-gradient text-white">

    <div class="intro">
        <h1 class="display-1">Leer</h1>
    </div>



    <div class="centrar2">

        <div>
            <div class="btn-group mr-2">
                <input type="text" class="form-control" aria-label="Small" placeholder="Filtro..." aria-describedby="inputGroup-sizing-sm">
            </div><br><br>
        </div>


        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $filtro = $_POST['filtro'];
                        $sql = "SELECT * FROM productos WHERE nombre LIKE '$filtro%'";
                        if ($resultado = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($resultado) > 0) {
                                echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Nombre</th>";
                                echo "<th>Precio</th>";
                                echo "<th>Cantidad</th>";
                                echo "<th>Disponible</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_array($resultado)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['nombre'] . "</td>";
                                    echo "<td>" . $row['precio'] . "</td>";
                                    echo "<td>" . $row['cantidad'] . "</td>";
                                    if ($row['disponible'] == 1) {
                                        echo "<td>" . 'SI' . "</td>";
                                    } else {
                                        echo "<td>" . 'NO' . "</td>";
                                    }
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($resultado);
                            } else {
                                echo '<div class="alert alert-danger"><em>No hay registros.</em></div>';
                            }
                        } else {
                            echo "Ha ocurrido un error.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<footer>

</footer>

</html>