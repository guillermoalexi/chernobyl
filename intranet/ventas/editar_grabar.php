<?php

include_once '../Conexion/lib_mysql.php';

$nom = $_POST['txtNom'];
$sim = $_POST['txtSim'];
if ($_POST['txtId'] == '') {
    $sql = "INSERT INTO venta (cliente,fechaventa) ";
    $sql .= "VALUES('$nom','$sim')";
} else {
    $id = $_POST['txtId'];
    $sql = "UPDATE venta SET fechaventa = '$sim' WHERE idVenta= $id AND cliente=$nom ";
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

