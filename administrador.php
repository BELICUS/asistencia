<!doctype html>
<html lang="en">

<?php
/**se llama la conexion y pido los datos de la tabla fisica **/
include './conexion/conexion_asistencia.php';
$sql = "SELECT incremento, id, nombre, correo FROM matematica";
$resul = $conexion->query($sql);

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8a31b174ad.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8a31b174ad.js" crossorigin="anonymous"></script>
</head>

<body>
  <header data-bs-theme="dark">



    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">

          <strong>Administrador</strong>
        </a>
        <a href="cerrar_sesion.php">
          <span>cerrar sesion</span>
        </a>

      </div>
    </div>
</header>
  <h1 class="text-center p-3">hello</h1>
  <div class="container-fluid row"></div>

  <form method="POST">

  <?php
  include './conexion/conexion_asistencia.php';

  if(!empty($_POST["agregar"])){
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["correo"])) {
     
      $id = $_POST["id"];
      $nombre = $_POST["nombre"];
      $correo = $_POST["correo"];

      // Verificar si el correo ya existe en la base de datos
      $stmt = $conn->prepare("SELECT * FROM matematica WHERE correo = ?");
      $stmt->bind_param("s", $correo);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
        // Si el correo ya existe, mostrar un mensaje de error
        echo "<div class='alert-danger'>Error: El correo ya está registrado</div>";
    } else {

      $sql = $conexion->query("INSERT INTO matematica(id, nombre, correo) VALUES ('$id', '$nombre', '$correo')");


      if ($sql == 1) {
        echo "<div class = 'alert-success'>  Nuevo estudiante añadido exitosamente </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    
     // Cerrar la declaración y la conexión
     $stmt->close();
     $conexion->close();

    }
  }
  }
  ?>

  <?php 
    include './conexion/conexion_asistencia.php';

    if(!empty($_POST["actualizar"])){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
    
        $sql = "UPDATE matematica SET id='$id', nombre='$nombre', correo='$correo' WHERE id=$id";
    
        if ($conexion->query($sql) === TRUE) {
            echo "Estudiante actualizado exitosamente";
        } /**else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }**/
    
        $conexion->close();
    }
    }
  ?>

    <?php
    include './conexion/conexion_asistencia.php';

    if(!empty($_POST["eliminar"])){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['id'])) {

        $id = $_POST['id'];
        $sql = "DELETE FROM matematica WHERE id=$id";
    
        if ($conn->query($sql) === TRUE) {
            echo "Estudiante eliminado exitosamente";
        } /**else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }**/
    
        $conn->close();
    }
  }
  }
    ?>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id</label>
    <input type="number" name="id" id="">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nombre</label>
    <input type="text" name="nombre" id="">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" name="correo" id="">
  </div>
  <button type="submit" class="btn btn-primary" name="agregar" value="ok">agregar estudiante</button>
  <button type="submit" class="btn btn-primary" name="actualizar" value="ok">actualizar estudiante</button>
  <button type="submit" class="btn btn-primary" name="eliminar" value="ok">eliminar estudiante</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">correo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    if($resul->num_rows > 0){
      while($row = $resul->fetch_assoc()){
        echo "
        <tr>
        <td>{$row['incremento']}</td>
        <td>{$row['id']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['correo']}</td>
        </tr>
        ";
      }
    }else {
            echo "<tr><td colspan='4'>No hay datos disponibles</td></tr>";
        }
       // $conn->close();
      ?>
    </tr>
  </tbody>
</table>

    </div>
   </form>
    

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>