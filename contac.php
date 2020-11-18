<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>


            <div class="contenedor">

                <h1 style="color: lime;" >Chernobyl Factory</h1>

                <input type="checkbox" id="menu-bar">
                <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="index.html">Inicio</a>
                    <a href="Contactanos.html">Regresar</a>
                </nav>
            </div>
        </header>
        <main>
            <?php
            $nom = $_REQUEST["nom"];
            $asunto = $_REQUEST["nom2"];
            $email = $_REQUEST["txtCorreo"];
            $nac = $_REQUEST["txtNac"];
            switch ($_REQUEST["txtGenero"]) {
                case 1:
                    $gen = "Masculino";
                    break;
                case 2:
                    $gen = "Femenino";
                    break;
                case 3:
                    $gen = "Prefiere no decirlo";
                    break;
                default:
                    break;
            }
            $coment = $_REQUEST["txtComentario"];
            ?> 
            <h2 style="margin-top: 120px; text-align: center;">Datos del formulario</h2>
            <table border="1" style="margin-top: 100px; margin-left: 500px;">
                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td><?= $nom ?></td>
                    </tr>
                    <tr>
                        <td>Asunto</td>
                        <td><?= $asunto ?></td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td><?= $email ?></td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento </td>
                        <td><?= $nac ?></td>
                    </tr>
                    <tr>
                        <td>Género</td>
                        <td><?= $gen ?></td>
                    </tr>
                    <tr>
                        <td>Comentario</td>
                        <td><?= $coment ?></td>
                    </tr>
                </tbody>
            </table>
            <footer style="background: black; color: white; margin-top: 165px;">
                <div class="contenedor">
                    <p class="copy">Copyright 2020 &copy; - Sitio de prueba - 
                        Aviso legal, politica de privacidad y afiliación.       
                        <br/> Para mayor información visite www.chernobylpage.com.pe.</p>
                    <div class="sociales" >
                        <a  class="fontawesome-facebook-sign" href="#"></a>
                        <a class="fontawesome-twitter" href="#"></a>
                        <a class="fontawesome-camera-retro" href="#"></a>
                        <a class="fontawesome-google-plus-sign" href="#"></a>
                    </div>
                </div>
            </footer>
        </main>    

    </body>

</html>

