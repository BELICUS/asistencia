<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/qr.css">
    </head>
    <body>
        <div class="body">

    <center>
        <h1>Bienvenidos a lenguaje</h1>
        <form action="lenguaje_registro.php" method="post">
        <div>Ingresa tu Nombre Completo</div>
       
            <label for="name" class="input-container"></label>
            <input type="text" name="estudiante" placeholder="Nombre">
        <br></br>            
        <div>Ingresa tu Id de Estudiante</div>
        <label for="name" class="input-container"></label>
        <input type="text" name="id" placeholder="Id de Estudiante">    
         <br></br>   
         
        <div>Ingresa tu Correo de Estudiante</div>
        <label for="email" class="input-container"></label>
        <input type="email" name="email" placeholder="Correo Estudiantil">
        <br></br>
        <div>
            <button type="submit" name="send" value="sends" class="btn">Enviar</button>
        </div>
        </form>
    </center>
    </body>
</html>
