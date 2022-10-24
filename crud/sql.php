<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <title>Consultas</title>
</head>

<body class="p-3 mb-2 bg-dark bg-gradient text-white">
  <?php
  include "conn.php";

  if (isset($_POST["registrar"])) { // REGISTRO
    $mote = $_POST["mote"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $contrasena = md5($contrasena);
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $sql = "INSERT INTO `usuarios`(`id`, `mote`, `correo`, `contrasena`, `nombre`, `apellido`, `admin`) VALUES (NULL,'$mote','$correo','$contrasena','$nombre','$apellido',0)";
    $run = mysqli_query($conn, $sql);
    echo "<script>Swal.fire({
        title: '¡Bienvenido!',
        text: 'Te has registrado correctamente',
        icon: 'success',
        confirmButtonText: 'Continuar'
      }).then(function() {
        window.location = 'login.php';
    });</script>";
  } elseif (isset($_POST["login"])) { // LOGIN
    $mote = $_POST["mote"];
    $contrasena = $_POST["contrasena"];
    $contrasena = md5($contrasena);
    $final = true;
    $sql = "SELECT mote, contrasena, admin FROM usuarios";
    $run = mysqli_query($conn, $sql);

    while ($fila = $run->fetch_assoc()) {
      if ($fila["mote"] == $mote && $fila["contrasena"] == $contrasena) {
        $_SESSION["mote"] = "$mote";
        $_SESSION["admin"] = $fila["admin"];
        echo "<script>Swal.fire({
                title: '¡Genial!',
                text: '¡Has iniciado sesión!',
                icon: 'success',
                confirmButtonText: 'Continuar'
              }).then(function() {
                window.location = 'leer.php';
            });</script>";
        $final = false;
      }
    }
    if ($final == true) {
      echo "<script>Swal.fire({
            title: '¡Error!',
            text: '¡Credenciales incorrectos!',
            icon: 'error',
            confirmButtonText: 'Continuar'
          }).then(function() {
            window.location = 'login.php';
        });</script>";
    }
  } elseif (isset($_POST["logout"])) { // CERRAR SESIÓN
    session_abort();
    echo "<script>Swal.fire({
            title: '¿Quieres cerrar sesión?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Sí',
            denyButtonText: `No`,
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire('¡Cerrando!', '', 'success')
              window.location = 'login.php';
            } else if (result.isDenied) {
              Swal.fire('No has cerrado sesión', '', 'info')
            }
          })</script>";
  } elseif (isset($_POST["insertar"])) { // INSERTAR
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    $disponible = $_POST["disponible"];

    $sql = "INSERT INTO productos(id,nombre,precio,cantidad,disponible) values(NULL, '$nombre','$precio','$cantidad','$disponible')";
    $run = mysqli_query($conn, $sql);

    echo "<script>Swal.fire({
            title: '¡Genial!',
            text: '¡Has insertado el producto ($nombre)!',
            icon: 'success',
            confirmButtonText: 'Continuar'
          }).then(function() {
            window.location = 'leer.php';
        });</script>";
  } elseif (isset($_POST["eliminar"])) { // ELIMINAR
    $id = $_POST["id"];

    $sql = "DELETE FROM productos where id = $id";
    $run = mysqli_query($conn, $sql);


    echo "<script>Swal.fire({
            title: '¡Genial!',
            text: '¡Has eliminado el producto ($nombre)!',
            icon: 'success',
            confirmButtonText: 'Continuar'
          }).then(function() {
            window.location = 'leer.php';
        });</script>";
  } elseif (isset($_POST["actualizar"])) {
    echo "<br> Se ha actualizado correctamente";
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    $disponible = $_POST["disponible"];


    $sql = "UPDATE `productos` SET `id`='$id',`nombre`='$nombre',`precio`='$precio',`cantidad`='$cantidad',`disponible`='$disponible' WHERE id = $id";
    if (!mysqli_query($conn, $sql)) { // ACTUALIZAR
      echo "<script>Swal.fire({
                title: '¡Error!',
                text: '¡Has introducido una ID errónea!',
                icon: 'success',
                confirmButtonText: 'Continuar'
              }).then(function() {
                window.location = 'leer.php';
            });</script>";
    } else {

      echo "<script>Swal.fire({
            title: '¡Genial!',
            text: '¡Has actualizado el producto ($nombre)!',
            icon: 'success',
            confirmButtonText: 'Continuar'
          }).then(function() {
            window.location = 'leer.php';
        });</script>";
    }
  } else {
    echo "Error";
  }
  ?>
</body>

</html>