<?php 
session_start();
$auth=$_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a0c4e2b062.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="/build/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>contacto</title>
</head>
<body>

    <section class="menu_responsive" id="menu">
        <div class="encabezado_menu">
            <p class="text-muted">BienesRaices</p>
        </div>
        <div>
            <nav class="">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
                <?php if (!$auth) { ?>
                            <a href="login.php">Iniciar Sesion</a>
                        <?php } ?>    
                        <?php if ($auth) { ?>
                            <a href="cerrar_sesion.php">Cerrar Sesion</a>
                        <?php } ?>
            </nav>
        </div>
    </section>

<!---------------------------------------------------------------------->
    <header class="header-menus container-fluid">
        <div class="logo-nav row">
            <div class="logo col-4 col-md-8 col-lg-6 ">
                <a href="/"><img src="/build/img/logo.svg" alt=""></a>
            </div>
            
            <div class="barra_navegacion col-8 col-md-4 col-lg-6">
                <div class="row">
                    <div class="icon_dark col-10 col-lg-12 ">
                        <img id="dark" src="/build/img/dark-mode.svg" alt="">
                    </div>
                    <div class="icon_menu col-2 " id="boton_menu">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="col-12 mt-3">
                        <nav class="nav justify-content-between">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if (!$auth) { ?>
                            <a href="login.php">Iniciar Sesion</a>
                        <?php } ?> 
                        <?php if ($auth) { ?>
                            <a href="cerrar_sesion.php">Cerrar Sesion</a>
                        <?php } ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

