<?php 
require 'includes/database.php';
$db=conexionDB ();

$error="";
if ($_SERVER['REQUEST_METHOD']==='POST') {

    $email=$_POST['email'];
    $password=$_POST['password'];

    if (!$email) {
        $error="*debes agregar un email valido*";
    }else if (!$password) {
        $error="*debes ingresar la contraseña*";
    }else {
    
        $query="SELECT * FROM usuarios WHERE email='${email}'";
    $res=mysqli_query($db,$query);

    if ($res->num_rows) {
        $row=mysqli_fetch_assoc($res);
        $auth=password_verify($password,$row['password']);
        if ($auth) {
            session_start();
            $_SESSION['email_user']=$row['email'];
            $_SESSION['login']=true;
            header('location: /admin/index.php');
        }else {
            $error="*contraseña incorrecta";
        }
    }else {
        $error="el usuario no existe";
    }
    }

}

?>

<?php include 'includes/templates/header.php';?>

<main>
    
<section class="cont_formulario col-12 col-md-6 mx-auto">
            <h1 class="text-center mt-5">LOGIN</h1>
            
            <form action="" method="POST" class="form">
                <div class="info_personal mt-5">
                    <div class="titulos_formularios text-muted">
                        <h3 >Inicia Sesión</h3>
                        <p class="text-danger text-center"><?php echo $error ?></p>
                        </div>
                        <div class="input email my-5">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="tu correo" required="">
                        </div>
                        <div class="input  my-5">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="tu contraseña" required="">
                        </div>
                </div>
                <div class="enviar">
                    <input type="submit" class="btn" value="Iniciar Sesión">
                </div>
            </form>
        </section>
    </main>

<?php include 'includes/templates/footer.php' ?>