<?php
include_once './Conexion/lib_mysql.php';
try {
    bd_conectar();
} catch (Exception $e) {
    die($e->getMessage());
}
?>

<html>
    <head>
        <title>CHERNOBYL FACTORY-SISTEMA DE VENTA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/responsivo.css" rel="stylesheet" type="text/css"/>
    </head>    
    <body style="background: linear-gradient(to bottom, blue, gray);">
 <header>
            <div class="contenedor">
          
                <h1 style="color: lime;" >Chernobyl Factory </h1>
                
                <input type="checkbox" id="menu-bar">
                <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="../index.html">Regresar a Inicio</a>
                    
                   
                  
                </nav>
            </div>
            </header>

        
        
        
        
        
        
        
        <main class="bajo7">
        
        <form   class="col-12 col-m-12 col-s-12" style=" " action="validacion.php" method="POST">
            <fieldset style=" margin-top: 110px ; margin-left: 100px;  padding: 23px; width: 50%;">
                <legend style="padding: 10px; color:white;">Inicio de sesion</legend>
                <input type="text" name="txt_user"
                       placeholder="Usuario" required=""/>
                <br/><br/>
                <input type="password" name="txt_clave" 
                       placeholder="Clave" required=""/>
                <br/><br/><br/>
                <input type="submit" value="Ingresar" />
    
            </fieldset>
        </form>
</main>
            
        
        
        
        
        
        
        
        
        <footer style="margin-top: 260px; background: black; color: white;">
            <div class="contenedor">
                <p class="copy" >Copyright 2020 &copy; - Sitio de prueba - Aviso legal, politica de privacidad y afiliación.       
                    <br/> Para mayor información visite www.chernobylpage.com.pe.</p>
                <div class="sociales">
                    <a class="fontawesome-facebook-sign" href="#"></a>
                    <a class="fontawesome-twitter" href="#"></a>
                    <a class="fontawesome-camera-retro" href="#"></a>
                    <a class="fontawesome-google-plus-sign" href="#"></a>
                </div>
            </div>
        </footer>
    </body>
</html>
