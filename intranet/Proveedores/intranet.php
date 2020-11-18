<?php
include_once '../Conexion/lib_mysql.php';
try {
    bd_conectar();
} catch (Exception $e) {
    die($e->getMessage());
}
?>
<!DOCTYPE html>
<html style=" height: ">
    <head>
        <meta charset="UTF-8">
        <link href="../../css/css.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/intranet.css" rel="stylesheet" type="text/css"/>
       <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body >

        <header>


            <div class="contenedor">

                <h1 >Chernobyl Factory</h1>

                <input type="checkbox" id="menu-bar">
                <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="modificar.php ">Nuevo registro</a>
                    <a href="../PaginaPrincipal.php">Inicio Intranet</a>
                </nav>
            </div>
        </header>
        <main>
        <h2 style="margin-top:100px; text-align: center;">Lista de proveedores</h2>
        <table   border="6" >

            <thead>
            <th>ID</th>
            <th>NOMBRE PROVEEDOR</th>
            <th>DIRECCIÓN</th>
            <th>TELEFONO</th>
            <th colspan="2">ACCIONES</th>
        </thead>

        <tbody>
            <?php
            $registros = bd_consultar("SELECT * FROM proveedor");
            if (!$registros) {
                ?>
                <tr> 
                    <td colspan="6"><?= "No hay registros" ?></td>
                </tr> 
                <?php
            } else {
                foreach ($registros as $persona) {
                    ?>
                    <tr> 
                        <td ><?= $persona['idProveedor'] ?></td>
                        <td><?= $persona['nombre'] ?></td>
                        <td><?= $persona['direccion'] ?></td>   
                        <td><?= $persona['telefono'] ?></td>

                        <td >
                            <a class="intra" href="modificar.php?id=<?= $persona['idProveedor'] ?>">
                                Editar</a>      
                        </td>
                        <td >
                            <a class="intra" href="eliminar.php?id=<?= $persona['idProveedor'] ?>"
                               onclick="return confirm('¿Seguro que deseas eliminar?');">
                                Borrar</a> 
                        </td>
                    </tr>
                    <?php
                }
            }
            bd_desconectar()
            ?>
        </tbody>

    </table>
        </main>
    <footer style="background: black; color: white; margin-top: 190px;">
        <div class="contenedor">
            <p class="copy">Copyright 2020 &copy; - Sitio de prueba - Aviso legal, politica de privacidad y afiliación.       
                <br/> Para mayor información visite www.chernobylpage.com.pe.</p>
            <div class="sociales" >
                <a  class="fontawesome-facebook-sign" href="#"></a>
                <a class="fontawesome-twitter" href="#"></a>
                <a class="fontawesome-camera-retro" href="#"></a>
                <a class="fontawesome-google-plus-sign" href="#"></a>
            </div>
        </div>
    </footer>
</body>
</html>
