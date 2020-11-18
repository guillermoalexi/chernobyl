<?php
include_once '../Conexion/lib_mysql.php';
try {
    bd_conectar();
} catch (Exception $e) {
    die($e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/css.css" rel="stylesheet" type="text/css"/>
       <link href="../../css/intranet.css" rel="stylesheet" type="text/css"/>
       <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
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
        
        <h2 style="margin-top:100px; text-align: center;">Lista de productos</h2>
        <table border="6" >
            
            <thead>
            <th>ID PRODUCTO</th>
            <th>PROVEEDOR</th>
            <th>NOMBRE</th>
            <th>STOCK</th>
            <th>PRECIO</th>
            
            <th colspan="2">ACCIONES</th>
        </thead>
        <tbody>
            <?php
            $registros = bd_consultar("SELECT * FROM producto");
            if (!$registros) {
                ?>
                <tr> 
                    <td colspan="7"><?= "No hay registros" ?></td>
                </tr> 
                <?php
            } else {
                foreach ($registros as $persona) {
                    ?>
                    <tr> 
                        <td style="text-align: center"><?= $persona['idProducto'] ?></td>
                        <td><?= $persona['proveedor'] ?></td>
                        <td><?= $persona['nombre'] ?></td> 
                        <td><?= $persona['stock'] ?></td>   
                        <td><?= $persona['precio'] ?></td>
                 
                        <td style="text-align: center">
                            <a class="intra" href="modificar.php?id=<?= $persona['idProducto'] ?>">
                                Editar</a>      
                        </td>
                        <td  style="text-align: center">
                            <a class="intra" href="eliminar.php?id=<?= $persona['idProducto'] ?>"
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
