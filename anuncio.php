<?php 
include 'includes/templates/header.php';
require 'includes/database.php';
$db=conexionDB ();

$id=$_GET['id'];

$consulta="SELECT * FROM propiedades WHERE id=${id}";
$res=mysqli_query($db,$consulta);
$row=mysqli_fetch_assoc($res);

?>
        
<div class="col-10 col-md-8  mx-auto my-5">
    <h3 class="text-center m-4"><?php echo $row['titulo']; ?></h3>
        <div class=" m-auto text-center col-12 ">
            <img class="img-fluid" src="/imagenes/<?php echo $row['imagen']; ?>" alt="">
        </div>
        
        <p class="m-3 text-success fw-bold fs-2"><?php echo "$" . $row['precio']; ?></p>
        
        <div class="col-12 my-3  ">
            <img class="ms-3 btn-close-white" src="build/img/icono_wc.svg" alt=""><label class="ms-1" for=""><?php echo $row['WC']; ?><label>
            <img class="ms-3  btn-close-white" src="build/img/icono_dormitorio.svg" alt=""><label class="ms-1" for=""><?php echo $row['habitaciones']; ?></label>
            <img class="ms-3 btn-close-white" src="build/img/icono_estacionamiento.svg" alt=""><label class="ms-1" for=""><?php echo $row['estacionamiento']; ?></label>
        </div>
        <p class="m-3"><?php echo $row['descripcion']; ?></p>
</div>

<?php include 'includes/templates/footer.php' ?>