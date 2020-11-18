<?php
include_once '../Conexion/lib_mysql.php';
$rotulo = "AGREGAR";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM producto WHERE idProducto = $id";
    $rotulo = "MODIFICAR";
    bd_conectar();
    $registros = bd_consultar($sql);
    $proveedor = $registros[0];
    unset($registros);
    bd_desconectar();
} else {
    $proveedor = null;
}
?>
<!DOCTYPE html>
<html>
      <link href="../../css/css.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/Intranetregistro.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
 
    <body>
        
         <header>
        <div class="contenedor">
            <h1 >Chernobyl Factory</h1>

            <input type="checkbox" id="menu-bar">
            <label class="fontawesome-align-justify" for="menu-bar"></label>
            <nav class="menu">

                <a href="intranet.php">Regresar a listado</a>
                <a href="../PaginaPrincipal.php">Inicio Intranet</a>
            </nav>
        </div>
    </header>
 
             <form  name="InsUpd" method="POST" action="editar_grabar.php">
            <fieldset style="width: 70%; margin-left: 150px; padding: 20px;">

                 <legend ><?= $rotulo ?> PRODUCTO </legend>
                <input type="text" name="txtId"  value="<?= $proveedor['idProducto'] ?>"
                   hidden="hidden"/>
            Proveedor<br/>
            <input type="text" name="txtNom" value="<?= $proveedor['proveedor'] ?>"
              placeholder="Ingrese código proveedor"     required="required"/><br/>
            <br/>Nombre producto<br/>
            <input type="text" name="txtSim" value="<?= $proveedor['nombre'] ?>"
               placeholder="Ingrese nombre"     required="required"/><br/>  
            <br/>Stock<br/>
            <input type="text" name="txtSim2" value="<?= $proveedor['stock'] ?>"
               placeholder="Ingrese stock"     required="required"/><br/> 
            <br/>Precio<br/>
            <input type="text" name="txtSim3" value="<?= $proveedor['precio'] ?>"
                placeholder="Ingrese precio"    required="required"/><br/>  
            <br/><input type="submit" name="btnGrabar" value="<?= $rotulo ?>">

            </fieldset>
        </form>
         <footer style="background: black; color: white; margin-top: 150px;">
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
            
        </form>
    </body>
</html>


