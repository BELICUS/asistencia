<?php
    
    $conexion=new mysqli("localhost","root","","rol","33065");
    $conexion->set_charset("utf8");

    
    if($conexion){
        echo 'conectado exitosamente';
    }else{
        echo 'no se conecto';
    }
    
?>