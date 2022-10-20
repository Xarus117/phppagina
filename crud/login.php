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
        <h1 class="display-1">Login</h1>
        <h2 class="display-4">Por Xarus</h2>
    </div>
    <form action="sql.php" method="post">
        <div class="d-flex justify-content-center flex-column">
            <div class="form-group">
                <label>Mote</label>
                <input name="mote" type="text" class="form-control" placeholder="Mote">
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input name="contrasena" type="password" class="form-control" placeholder="Contraseña"><br>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Iniciar sesión</button>
        </div>
    </form>


</body>
</html>