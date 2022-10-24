<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="p-3 mb-2 bg-dark bg-gradient text-white">

    <form action="sql.php" method="post">
        <div class="centrar">
            <div class="intro">
                <h3 class="display-3">Registrar</h3><br>
                <img src="./assets/user-plus.png" alt="Register">
            </div>
            <div class="form-group">
                <label>Mote</label>
                <input name="mote" pattern="[a-zA-Z0-9-]+" type="text" class="form-control" placeholder="Mote"><br>
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input name="correo" type="mail" class="form-control" placeholder="Correo electrónico"><br>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input name="contrasena" type="password" class="form-control" placeholder="Contraseña"><br>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" pattern="[a-zA-Z0-9-]+" type="text" class="form-control" placeholder="Nombre"><br>
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input name="apellido" pattern="[a-zA-Z0-9-]+" type="text" class="form-control" placeholder="Apellido"><br>
            </div>
            <div class="intro">
                <button type="submit" name="registrar" class="btn btn-primary btn-lg">Registrar</button><br>
                <a href="./login.php" class="btn btn-secondary btn-sm">Login</a>
            </div>
        </div>
    </form>

</body>

</html>