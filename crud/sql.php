<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>

<?php
session_start();
include 'conn.php';

if (isset($_POST['registrar'])) {
    $mote = $_POST['mote'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = md5($contrasena);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql = "INSERT INTO `usuarios`(`id`, `mote`, `correo`, `contrasena`, `nombre`, `apellido`) VALUES (NULL,'$mote','$correo','$contrasena','$nombre','$apellido')";
    $run = mysqli_query($conn, $sql);

}else if (isset($_POST['logout'])) {
    echo "<script>alert('Has cerrado sesión');document.location='logeo.php'</script>";
    session_abort();
} 
else if (isset($_POST['login'])) {
    $mote = $_POST['mote'];
    $contrasena = $_POST['contrasena'];
    $contrasena = md5($contrasena);
    $sql = "SELECT mote, contrasena FROM usuarios";
    $run = mysqli_query($conn, $sql);
    $_SESSION['mote'] = "$mote";

    while ($fila = $run->fetch_assoc()) {
        if ($fila["mote"] == $mote && $fila["contrasena"] == $contrasena) {
            echo "<script>alert('Has iniciado sesión');document.location='leer.php'</script>";
            echo $_SESSION['mote'];
        }
    }
    echo "<script>alert('Mote/Contraseña incorrectos');document.location='logeo.php'</script>";

}
else if (isset($S_POST['insertar'])) {
    echo "<br> Se ha insertado correctamente";
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $disponible = $_POST['disponible'];

    $sql = "INSERT INTO productos(id,nombre,precio,cantidad,disponible) values(NULL, '$nombre','$precio','$cantidad','$disponible')";
    $run = mysqli_query($conn, $sql);
} else if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM productos where id = $id";

    $run = mysqli_query($conn, $sql);
} else if (isset($_POST['actualizar'])) {
    echo "<br> Se ha actualizado correctamente";
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $disponible = $_POST['disponible'];

    $sql = "UPDATE `productos` SET `id`='$id',`nombre`='$nombre',`precio`='$precio',`cantidad`='$cantidad',`disponible`='$disponible' WHERE id = $id";

    $run = mysqli_query($conn, $sql);
} else {
    echo "Error";
}
?>


</body>
</html>