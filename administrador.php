<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  echo '
      <script type="text/javascript">
      alert("porfavor iniciar sesion");
      window.location.href = "login.php";
      </script>
    ';
  //header("location: noje.php");
  session_destroy();
  die();

}


?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <header data-bs-theme="dark">



    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">

          <strong>administrador</strong>
        </a>
        <a href="cerrar_sesion.php">
          <span>cerrar sesion</span>
        </a>

      </div>
    </div>
  </header>
  
    

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>