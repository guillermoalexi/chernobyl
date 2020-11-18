<?php
include_once '../Conexion/lib_mysql.php';
$id = $_GET['id'];
$sql = "DELETE FROM Venta WHERE idVenta = $id";
bd_conectar();
if (bd_ejecutar($sql)) {
    header('location: intranet.php');
} else {
    echo "Error al eliminar el registro:<br/>";
    echo '<a href="intranet.php">Regresar</a>';
}

