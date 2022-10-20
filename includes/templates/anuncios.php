<?php 
require 'includes/database.php';
$db=conexionDB ();

$consulta="SELECT * FROM propiedades LIMIT ${limite}";
$res=mysqli_query($db,$consulta);

?>


<div class="grid-sec2">
    <?php while($row=mysqli_fetch_assoc($res) ) { ?>
        
        
    <div class="cards_sec2">
        <div class="img-card">
            <img src="/imagenes/<?php echo $row['imagen']; ?>" alt="">
    </div>
    <div class="descripcion_card">
        <h3><?php echo $row['titulo']; ?></h3>
        <p><?php echo $row['descripcion']; ?></p>
        <h2 class="precio_card"><?php echo $row['precio']; ?></h2>
        <div class="iconos">
            <img src="build/img/icono_wc.svg" alt=""><label for=""><?php echo $row['WC']; ?></label>
            <img src="build/img/icono_dormitorio.svg" alt=""><label for=""><?php echo $row['habitaciones']; ?></label>
            <img src="build/img/icono_estacionamiento.svg" alt=""><label for=""><?php echo $row['estacionamiento']; ?></label>
        </div>
        <div class="btn_card col-10">
            <a class="btn" href="anuncio.php?id=<?php echo $row['id']; ?>">Ver Propiedad</a>
        </div>
    </div>
    </div>
    <?php } ?>
</div>