
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="p-3 mb-2 bg-dark bg-gradient text-white">
<div class="intro">
        <h1 class="display-1">Registrar</h1>
        <h2 class="display-4">Por Xarus</h2>
    </div>
    <form action="sql.php" method="post">
        <div class="d-flex justify-content-center flex-column">
            <div class="form-group">
                <label>Mote</label>
                <input name="mote" type="text" class="form-control" placeholder="Mote">
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input name="correo" type="mail" class="form-control" placeholder="Correo electrónico">
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input name="contrasena" type="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input name="apellido" type="text" class="form-control" placeholder="Apellido"><br>
            </div>
            <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
        </div>
    </form>
    <div class="intro">
        <a href="./login.php" class="btn btn-secondary">Login</a>
        </div>
</body>
</html>