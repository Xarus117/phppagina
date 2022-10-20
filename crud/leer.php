<?php
session_start();

include 'conn.php';
$sql = "SELECT * FROM `productos`";
$run = mysqli_query($conn, $sql);
?>
<p class="h4">
    <?php
    echo $_SESSION['mote'];
    ?>
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
</head>
<form action="sql.php" method="post">
<button id="logout" class="btn btn-primary" name="logout" type="submit">Logout</button>
</form>
<body class="p-3 mb-2 bg-dark bg-gradient text-white">

    <div class="intro">
        <h1 class="display-1">Leer</h1>
        <h2 class="display-4">Por Xarus</h2>
    </div>

    <div class="d-flex justify-content-center flex-column">
        <div class="p-3 mb-3 bg-light text-dark border border-1">

            <?php while ($fila = $run->fetch_assoc()) {
                echo "</br> ";
            ?>
                <div class="item">
                <?php
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
                ?>
                </div>
                <?php
            } ?>
                
        </div>
    </div>
    <div>

    </div>
</body>

<footer>

</footer>

</html>