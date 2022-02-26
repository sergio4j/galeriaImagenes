<?php
    include('include/header.php');

    include ("conexion.php");
    $id = $_REQUEST['id']; 
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "UPDATE imagenes SET nombre='$nombre',imagen='$imagen' WHERE id = '$id'";

    $resultado = $conexion->query($query);

    if($resultado){


       header('Refresh: 2; URL=index.php');
          
       echo '<p class="alert alert-success mt-3" role="alert">Imagen modificada correctamente!<p>';

    }else{
        header('Refresh: 2; URL=index.php');

        echo '<p class="alert alert-danger mt-3" role="alert">error al modificar imagen!<p>';
    }
?>