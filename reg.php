<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <header>


            <div class="contenedor">

                <h1 >Chernobyl Factory</h1>

                <input type="checkbox" id="menu-bar">
                <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="index.html">Inicio</a>
                    <a href="Contactanos.html">Regresar</a>
                </nav>
            </div>
        </header>
        
        <?php
     
  $nom = $_REQUEST["nom1"];
$ape = $_REQUEST["nom2"];
$dni = $_REQUEST["nom3"];
$correo = $_REQUEST["nom4"];
$user = $_REQUEST["nom5"];
$pas = $_REQUEST["nom6"];
$pas2 = $_REQUEST["nom7"];


        ?>
        
        <h2 style="margin-top: 120px; text-align: center;">Datos del registro</h2>
            <table border="1" style="margin-top: 100px; margin-left: 500px;">
                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td><?= $nom ?></td>
                    </tr>
                    <tr>
                        <td>Apellido</td>
                        <td><?= $ape ?></td>
                    </tr>
                    <tr>
                        <td>DNI</td>
                        <td><?= $dni ?></td>
                    </tr>
                    <tr>
                        <td>Correo </td>
                        <td><?= $correo ?></td>
                    </tr>
                    <tr>
                        <td>Nombre de usuario</td>
                        <td><?= $user ?></td>
                    </tr>
                    <tr>
                        <td>Contraseña</td>
                        <td><?= $pas ?></td>
                    </tr>
                    <tr>
                        <td>Contraseña confirmada</td>
                        <td><?= $pas2 ?></td>
                    </tr>
                    
                        <tr>
                        <td>Medios por donde nos ubicaron</td>
                        <td>
  <?php
  
     $medio = $_REQUEST["txt"];  
   $i="";
foreach ($medio as $i) {
    switch ($i) {
        case 1:
            echo "Facebook";
            break;
        case 2:
            echo "Anuncios";
            break;
        case 3:
            echo "Amistades";
            break;
        case 4:
            echo "Youtube";
            break;
        case 5:
            echo "Otros medios";
           break;
        default:
            break;
    }
    echo "<br/>";
} ?>
                        </td>
                    </tr>
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
