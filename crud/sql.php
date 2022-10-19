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

} else if (isset($_POST['login'])) {
    $mote = $_POST['mote'];
    $contrasena = $_POST['contrasena'];
    $contrasena = md5($contrasena);
    $sql = "SELECT mote, contrasena FROM usuarios";
    $run = mysqli_query($conn, $sql);
    $_SESSION['mote'] = "$mote";
    echo $_SESSION['mote'];

    while ($fila = $run->fetch_assoc()) {
        if ($fila['mote'] == $mote && $fila["contrasena"] == $contrasena) {
            echo "Iniciando sesion";
            echo $_SESSION['mote'];
            header("Location: leer.php", true, 301);
            exit();
        } else {
            echo "Credenciales incorrectos";
        }
    };
} else if (isset($S_POST['insertar'])) {
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
