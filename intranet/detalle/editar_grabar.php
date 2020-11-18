<?php

include_once '../Conexion/lib_mysql.php';

$nom = $_POST['txtNom'];
$sim = $_POST['txtSim'];
$telf = $_POST['txtTelf'];

if ($_POST['txtId'] == '') {
    $sql = "INSERT INTO detalleventa (articulo,factura,cantidad) ";
    $sql .= "VALUES('$nom','$sim','$telf')";
} else {
    $id = $_POST['txtId'];
    $sql = "UPDATE detalleventa SET cantidad = '$telf' WHERE idDetalleventa= $id AND articulo=$nom AND factura=$sim";
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