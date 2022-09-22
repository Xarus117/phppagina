<?php
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$cantidad = $_GET['cantidad'];

$servidor="localhost";
$usuario="root";
$password="";
$bd="crub";


$con=mysqli_connect($servidor,$usuario,$password,$bd);

if(!$con){
    die("No se ha podido realizar la conexión_".mysqli_connect_error()."<br>");
}
else{
    mysqli_set_charset($con,"utf8");
    echo "Se ha establecido correctamente la conexión a la base de datos";
    if(!$con){
        die("No se ha podido realizar la conexión_".mysqli_connect_error()."<br>");
    }else{
        mysqli_set_charset($con,"utf8");
        echo "Se ha establecido correctamente la conexión a la base de datos";
    
        $sql="INSERT INTO `productos`(`id`,`nombre`, `precio`, `cantidad`) 
        VALUES (NULL,'$nombre','$precio',$cantidad)";
        
        $consulta=mysqli_query($con,$sql);
    
        if(!$consulta){
            die("No se ha podido realizar el insert");
        }else{
            echo "El insert se ha realizado correctamente";
        }
    }
}

header('Location: insertar.html');
exit;

?>