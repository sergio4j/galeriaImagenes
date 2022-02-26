
 <?php 
 include('include/header.php');
    
    include('conexion.php'); 
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM imagenes WHERE id = '$id' ";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();
    
?>
<div class="container">
    <a class="btn btn-info m-3" href="index.php">Regresar</a>
    <div class="formularioModificar">
    <h3 class="text-center">Modificar Imagen</h3>
        <form class="p-3 " action="modificacionImg.php?id=<?php echo$row['id'];?>" method="POST" enctype="multipart/form-data"><br><br>
            <div class="card">
                <img  src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <label for="titulo">Titulo</label>
                <input type="text" required name="nombre" id="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'];?>"/> <br>
               <label for="imagen">Imagen</label>
                <input type="file" required name="imagen"><br>
                <input class="btn btn-success mt-3" type="submit" value="Modificar">
            </div>
        </form>
    </div>
</div>


    <?php include('include/footer.php');?>
