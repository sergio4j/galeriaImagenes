
    
<?php include('include/header.php');?>


<div class="container">
  <div class="formularioImagen mb-4 mt-2">
  <h3 class="text-center">Subir Imagen</h3>
    <form class="p-3 " action="guardar.php" method="POST" enctype="multipart/form-data">
        <input type="text" required name="nombre" id="nombre" placeholder="Nombre..." value=""/>
        <input type="file" required name="imagen" />
        <input class="btn btn-success " type="submit" value="Aceptar">
    </form>
  </div>

  <h1 class="text-center">Galeria de Imagenes</h1>

    <div class="imagenesGaleria">
    <?php 
        include('conexion.php'); 
        $query = "SELECT * FROM imagenes";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
        
    ?>
            <div class="card">
              <img  src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="text-center mb-3"><?php echo $row ['nombre'] ?></h3>
                <hr>
                <a class="btn btn-info boton" href="modificar.php?id=<?php echo $row['id'] ?>">Modificar</a>
                <a class="btn btn-danger boton" href="eliminar.php?id=<?php echo $row['id'] ?>">Borrar</a>
              </div>
            </div>
      <?php
        }
    ?>
    </div>
</div>

<?php include('include/footer.php');?>


