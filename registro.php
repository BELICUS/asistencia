<?php
include_once 'conexion/conexion.php';

//session_start();
//$_SESSION['usuario']=$usuario;
//agregar datos a la base de datos
$id=$_POST['id'];
$contra=$_POST['contra'];
$query="INSERT INTO usuarios(id,contra)
        VALUES ('$id','$contra')";
$consulta="SELECT *FROM  usuarios WHERE id='$id' AND contra='$contra'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);


if($filas['id_cargo']==1){//administrador
    header("location:administrador.php");
}else
if($filas['id_cargo']==2){//estudiante
    header("location:estudiante.php");
}else
if($filas['id_cargo']==3){//profesor
    header("location:profesor.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR en la autentificacion </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

//validacion de inicio de sesion
session_start();
include 'conexion/conexion.php';



$validar_login=mysqli_query($conexion, "SELECT * FROM usuarios WHERE id ='$id' AND contra ='$contra' ");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario']=$id;
   header('location: administrador.php');
   exit();
}else{
    echo'
    <script type="text/javascript">
    
    alert("usuario no existe, coloque bien los datos");
    window.location.href="login.php";
    
    </script>
    
    ';


}

?>