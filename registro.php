<?php
include 'conexion/conexion.php';

session_start();
$_SESSION['usuario']=$usuario;
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

