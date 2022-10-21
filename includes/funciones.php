
<?php 

function autenticado(){
    session_start();
$auth=$_SESSION['login'];

if ($auth) {
    return true;
}else {
    return false;
}
}
?>