<?php

$user = $_POST["txt_user"];
$pass = $_POST["txt_clave"];

if ($user != "root" || $pass != "123") {
    die("Acceso restringido");
}else{
    header('location: PaginaPrincipal.php');
}

?>