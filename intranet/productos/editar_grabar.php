<?php

include_once '../Conexion/lib_mysql.php';

$nom = $_POST['txtNom'];
$sim = $_POST['txtSim'];
$sim2 = $_POST['txtSim2'];
$sim3 = $_POST['txtSim3'];
if ($_POST['txtId'] == '') {
    $sql = "INSERT INTO producto (proveedor,nombre,stock,precio) ";
    $sql .= "VALUES('$nom','$sim','$sim2','$sim3')";
} else {
    $id = $_POST['txtId'];
    $sql = "UPDATE producto SET nombre = '$sim',". " stock = '$sim2',". " precio = '$sim3' WHERE idProducto= $id AND proveedor=$nom ";

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