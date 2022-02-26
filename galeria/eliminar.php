<?php

    include ("conexion.php");
    $id = $_REQUEST['id']; 
   
    $query = "DELETE FROM imagenes WHERE id = '$id'";

    $resultado = $conexion->query($query);

    if($resultado){
         header('Location:index.php');
    }else{
        echo "Fallo al Eliminar la imagen";
    }
?>