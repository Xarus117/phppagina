<?php
$id = $_POST["id"];

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

        $sql = "DELETE FROM productos WHERE id=$id";

        $consulta = mysqli_query($con, $sql);
    }
}

header("Location: eliminar.html");
exit();

?>
