<?php

include_once '../Conexion/lib_mysql.php';

$nom = $_POST['txtNom'];
$sim = $_POST['txtSim'];
$telf = $_POST['txtTelf'];
$telf2 = $_POST['txt5'];
$telf4 = $_POST['txt7'];

if ($_POST['txtId'] == '') {
    $sql = "INSERT INTO cliente (nombre,paterno,materno,telefono,direccion) ";
    $sql .= "VALUES('$nom','$sim','$telf','$telf2','$telf4')";
} else {
    $id = $_POST['txtId'];
    $sql = "UPDATE cliente SET nombre = '$nom',". " paterno = '$sim',". " materno = '$telf' ,". " telefono = '$telf2',". " direccion = '$telf4' WHERE idCliente = $id";
}
bd_conectar();
if (bd_ejecutar($sql)) {
    bd_desconectar();
    header('location: intranet.php');
} else {
    echo "Error al procesar el registro:<br/>";
    echo '<a href="intranet.php">Regresar</a>';
    bd_desconectar();
}