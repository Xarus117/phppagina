<?php
session_start();

include "conn.php";
$sql = "SELECT * FROM `productos`";


$run = mysqli_query($conn, $sql);
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
</head>

<header>

<?php
$sql2 = "SELECT * FROM `usuarios`";
$run2 = mysqli_query($conn, $sql2);


while ($fila = $run2->fetch_assoc()) {
    if ($fila['mote'] == $_SESSION['mote'] && $fila['admin'] == 1) {
?>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="./insertar.php" class="btn btn-primary">Insertar</a>
                    </li>
                    <li class="nav-item">
                    <a href="./eliminar.php" class="btn btn-primary">Eliminar</a>
                    </li>
                    <li class="nav-item">
                    <a href="./actualizar.php" class="btn btn-primary">Actualizar</a>
                    </li>
                    <li class="nav-item">
                    <a href="./leer.php" class="btn btn-primary">Leer</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
      
    
<?php
    }
}
?>
<form action="./sql.php" method="post"><br>
<button type="submit" name="logout" class="btn btn-secondary">Logout</button>
</form>
   

 

</header>

<body class="p-3 mb-2 bg-dark bg-gradient text-white">

    <div class="intro">
        <h1 class="display-1">Leer</h1>
        <h2 class="display-4">Por Xarus</h2>
    </div>


    <div class="d-flex justify-content-center flex-column">
    <div>
        <form action="leer.php" method="POST">
<button class="btn btn-secondary" type="submit" name="1">Nombre
</button>
<button class="btn btn-secondary" type="submit" name="2">Precio
</button>
<button class="btn btn-secondary" type="submit" name="3">Disponibilidad
</button>
</form>
</div>

        <div class="p-3 mb-3 bg-light text-dark border border-1">
            <?php while ($fila = $run->fetch_assoc()) {
                echo "</br> "; ?>
                <div class="item">
                    <?php
                    echo "<td> ID: " . $fila["id"] . "</td>";
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