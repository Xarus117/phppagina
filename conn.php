<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "crub";

$con = mysqli_connect($servidor, $usuario, $password, $bd);
mysqli_set_charset($con, "utf8");
?>