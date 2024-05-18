<?php
    include 'conexion/conexion_asistencia.php';
    
    //agregar datos a la base de datos
    $name=$_POST['nombre'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    
    $query="INSERT INTO fisica(estudiante,id,email)
            VALUES ('$name','$id','$email')";
            
    
    $consulta="SELECT *FROM  fisica WHERE estudiante='$name' AND id='$id' AND email='$email'";

    //verificar que no se repitan los datos en cada tabla
$verificar_name=mysqli_query($conexion, "SELECT *FROM fisica WHERE estudiante ='$name'");

 $verificar_id= mysqli_query($conexion, "SELECT *FROM  fisica WHERE id = '$id' ");

$verificar_email = mysqli_query($conexion, "SELECT *FROM fisica WHERE email = '$email' ");

if(mysqli_num_rows($verificar_name) > 0){
  echo '
    <script type="text/javascript">
    alert("este nombre ya se registro intenta otro");
    window.location.href="fisica.php";
    </script>
    
  ';

  exit();
}if(mysqli_num_rows($verificar_id) > 0){
  echo '
    <script type="text/javascript">
    alert("este id ya existe");
    window.location.href="fisica.php";
    </script>
    
  ';

  exit();
}if(mysqli_num_rows($verificar_email) > 0){
    echo '
      <script type="text/javascript">
      alert("este email ya existe");
      window.location.href="fisica.php";
      </script>
      
    ';
  
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
  echo'<script type="text/javascript">
    
    alert("Tarea Guardada");
    window.location.href="profesor.php";
    
    </script>
  ';
}else{
  echo '
    <script type="text/javascript">
    
    alert("No, intenta de nuevo");
    window.location.href="fisica.php";
    
    </script>
  
  ';
}
    mysqli_close($conexion);
    
    
