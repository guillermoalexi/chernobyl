<?php

include_once '../Conexion/lib_mysql.php';

$nom = $_POST['txtNom'];
$sim = $_POST['txtSim'];
$telf = $_POST['txtTelf'];

if ($_POST['txtId'] == '') {
    $sql = "INSERT INTO proveedor (nombre, direccion,telefono) ";
    $sql .= "VALUES('$nom','$sim','$telf')";
} else {
    $id = $_POST['txtId'];
    $sql = "UPDATE proveedor SET nombre = '$nom',". " direccion = '$sim',". " telefono = '$telf' WHERE idProveedor = $id";
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