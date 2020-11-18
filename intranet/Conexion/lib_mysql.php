<?php
include_once('config.php');
$cnx = '';

/**
 * Función para Conectarse a la base de datos
 */
function bd_conectar() {
    global $cnx;
    $cnx = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    mysqli_query($cnx, "set names utf8");
}


/**
 * Función para desconectarse de la base de datos
 */
function bd_desconectar() {
    global $cnx;
    mysqli_close($cnx);
}

/**
 * Función para realizar consultas (SELECT) a la base de datos
 */
function bd_consultar($sql) {
    global $cnx;
    $bolsa = mysqli_query($cnx, $sql);
    $salida = array();
    if ($bolsa != null) {
        while ($row = mysqli_fetch_assoc($bolsa)) {
            $salida[] = $row;
        }
        mysqli_free_result($bolsa);
    } else {
        $salida = false;
    }
    unset($row);
    return $salida;
}

/**
 * Función para ejecuciones UPDATE o DELETE a la base de datos
 */
function bd_ejecutar($sql) {
    global $cnx;
    $exito = mysqli_query($cnx, $sql);
    if ($exito) {
        return true;
    } else {
        return false;
    }
}