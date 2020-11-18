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
 
      
       <h2 style="margin-top:100px; text-align: center;">Lista de ventas</h2>
        <table class="bajo78" border="6" >
            
            <thead>
            <th>ID VENTA</th>
            <th>CLIENTE</th>
            <th>FECHA DE VENTA</th>
            <th colspan="2">ACCIONES</th>
        </thead>
        <tbody>
            <?php
            $registros = bd_consultar("SELECT * FROM venta");
            if (!$registros) {
                ?>
                <tr> 
                    <td colspan="5"><?= "No hay registros" ?></td>
                </tr> 
                <?php
            } else {
                foreach ($registros as $persona) {
                    ?>
                    <tr> 
                        <td style="text-align: center"><?= $persona['idVenta'] ?></td>
                        <td><?= $persona['cliente'] ?></td>
                        <td><?= $persona['fechaventa'] ?></td>   
                        <td style="text-align: center">
                            <a class="intra" href="modificar.php?id=<?= $persona['idVenta'] ?>">
                                Editar</a>      
                        </td>
                        <td style="text-align: center">
                            <a class="intra" href="eliminar.php?id=<?= $persona['idVenta'] ?>"
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
