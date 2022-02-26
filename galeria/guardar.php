<?php
    include('include/header.php');

    include ("conexion.php");

    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO imagenes(nombre, imagen) VALUES ('$nombre', '$imagen')";

    $resultado = $conexion->query($query);

    if($resultado){

           header('Refresh: 2; URL=index.php');
          
            echo '<p class="alert alert-success mt-3" role="alert">Imagen subida correctamente!<p>';
      

    }else{
        header('Refresh: 2; URL=index.php');

        echo '<p class="alert alert-danger mt-3" role="alert">error al insertar imagen!<p>';
    }
?>