
<?php include '../includes/templates/header_admin.php'  ?>

<!--variable que almacena el valor de la url para mostrar mensaje temporal -->
<?php   $mensaje=$_GET['msj']  ?>

<?php
//conexion base de datos
require '../includes/database.php';
$db=conexionDB ();

//consultando base
$sql="SELECT * FROM propiedades;";
$consulta=mysqli_query($db,$sql);
?>

<main>
    <h1 class="text-center">Administrador de Bienes Raices</h1>

    <!--muestra un mensaje temporal -->
    <?php if ($mensaje == 1) { ?>
            <p id="msj" class="p-2 bg-success m-auto text-center col-3 rounded-5">PROPIEDAD AGREGADA CORRECTAMENTE</p>
    <script>
        $('#msj').delay(2500).fadeOut(1500);
    </script>
    <?php }elseif ($mensaje == 2) { ?>
        <p id="msj" class="p-2 bg-success m-auto text-center col-3 rounded-5">PROPIEDAD ACTUALIZADA CORRECTAMENTE</p>
    <script>
        $('#msj').delay(2500).fadeOut(1500);
    </script>
    <?php }elseif ($mensaje == 3) { ?>
        <p id="msj" class="p-2 bg-success m-auto text-center col-3 rounded-5">PROPIEDAD ELIMINADA CORRECTAMENTE</p>
    <script>
        $('#msj').delay(2500).fadeOut(1500);
    </script>
    <?php }  ?>
    <!-- -->

    <div class="mt-5 d-flex justify-content-around">
    <a href="/admin/propiedades/crear.php" class="btn btn-primary">Nueva Propiedad</a>
    </div>
    
    <div class="lista_propiedades">
    <table class="table table-bordered text-center table align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>IMAGEN</th>
                <th>PRECIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row=mysqli_fetch_assoc($consulta)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><img src="/imagenes/<?php echo $row['imagen']; ?>" class="img_propiedades" alt=""></td>
                <td><?php echo $row['precio'] ?></td>
                <td>
                    <div class="d-flex flex-column align-items-center ">
                    <a href="/admin/propiedades/actualizar.php?id=<?php echo $row['id'];?>" class=" mb-2 btn btn-success  col-6">Actualizar Propiedad</a>
                    <a href="/admin/propiedades/borrar.php?id=<?php echo $row['id'];?>" class="btn btn-danger  col-6">Eliminar Propiedad</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
    </div>
    
</main>

<?php include '../includes/templates/footer.php' ?>