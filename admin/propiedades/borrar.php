<?php 
require '../../includes/database.php';
$db=conexionDB ();
?>
<?php include '../../includes/funciones.php';
$auth=autenticado();
if (!$auth) {
    header('location: /');
}
?>

<?php

$id=$_GET['id'];
$sql="SELECT * FROM propiedades WHERE id= ${id}";
$res=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($res);

$img_actual=$row['imagen'];
$nombre=$row['titulo'];
$carpetaImagenes = '../../imagenes/';


if ($_SERVER['REQUEST_METHOD']==='POST') {

$query="DELETE FROM propiedades where id=${id}";
$res=mysqli_query($db,$query);

if ($res) {
    unlink($carpetaImagenes . $img_actual);
    header('Location: /admin?msj=3');
}

}

?>
<?php include '../../includes/templates/header_admin.php'  ?>

<main>
    <!-- <h1 class="text-center">Borrar</h1> -->

    

    <form action="" method="POST" class="">
        <div class="row d-flex justify-content-center py-5  m-auto rounded-4 ">
        <h3 class=" fw-bold  col-12 text-center text-danger" for="">Seguro que desea borrar la propiedad: <br> <span class="text-white fw-bold fs-2"><?php echo $id . ".- " . $nombre ?></span> </h3>
        </div>
        
        <div class="row text-center d-flex justify-content-center">
            <input class="btn bg-danger fw-bold col-10 my-1 col-md-2 ms-1" type="submit" value="CONFIRMAR">
            <a href="../index.php" class="ms-1 btn bg-primary fw-bold col-10 my-1 col-md-2 pt-2">CANCELAR</a>
        </div>
        
    </form>
</main>

<?php include '../../includes/templates/footer.php' ?>