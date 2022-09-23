<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
if (isset($_POST["disponible"])) {
    //$stok is checked and value = 1
    $disponible = true;
    echo "disponible";
} else {
    //$stok is nog checked and value=0
    $disponible = false;
    echo "no disponible";
}

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "crub";

$con = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$con) {
    die(
        "No se ha podido realizar la conexión_" .
            mysqli_connect_error() .
            "<br>"
    );
} else {
    mysqli_set_charset($con, "utf8");
    echo "Se ha establecido correctamente la conexión a la base de datos";
    if (!$con) {
        die(
            "No se ha podido realizar la conexión_" .
                mysqli_connect_error() .
                "<br>"
        );
    } else {
        mysqli_set_charset($con, "utf8");
        echo "Se ha establecido correctamente la conexión a la base de datos";

        $sql = "UPDATE `productos` SET nombre = '$nombre', precio = $precio, cantidad = $cantidad, disponible = $disponible WHERE id = $id";

        $consulta = mysqli_query($con, $sql);
    }
}

header("Location: actualizar.html");
exit();

?>
