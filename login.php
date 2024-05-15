<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <!--login para iniciar sesion-->
    <div class="formulario">
    <h1>inicio de sesion</h1>
    <form action="registro.php" method="post">
        <div class="id">
            <input type="text" name="id" required>
            <label>id</label>
        </div>
        <br>
        <div class="id">
            <input type="text" name="contra" required>
            <label>contraseña</label>
        </div>
        <br>
        <!--comento el olvidar contraseña porque no lo usaremos-->
        <!--<div class="recordar">¿Olvido su contraseña?</div>-->
        <input type="submit" value="Iniciar">
        <!--campo para registrarse-->
        <div class="registrarse">
            quiero hacer el <a href="registrarse.php">Registro</a>
        </div>
    </form>
    </div>
    
</body>
</html>