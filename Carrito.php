<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito de compra</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>


            <div class="contenedor">

                <h1 >Chernobyl Factory</h1>

                <input type="checkbox" id="menu-bar">
                <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="index.html">Inicio</a>
                    <a href="Productos.html">Regresar</a>
                </nav>
            </div>
        </header>
        <main>
        <table border="1" style="margin-top: 100px; margin-left: 500px;">
            <tbody>

               
                    <h2 style="margin-top: 120px; text-align: center;">Datos del carrito</h2>

             
                 <tr>
                    <td>
                        Productos seleccionados
                    </td>
                    <td>   <?php
                    $sum1=0;
                    $sum2=0;
                    $sum3=0;
                    $sum4=0;
                    $sum5=0;
                    $sum6=0;
                    $sum7=0;
                    $sum8=0;
    $xd = $_REQUEST["txtxd"];  
foreach ($xd as $i) {
    switch ($i) {
        case 1:
            echo "Ryzen 7x - s/.";
            echo $sum1 = 450;
            break;
        case 2:
            echo "Ryzen 5 - s/.";
            echo $sum2 = 350;
            break;
        case 3:
            echo "Laptop hp 1030  - s/.";
            echo $sum3 = 800;
            break;
        case 4:
            echo "Laptop hp 2050 - s/.";
            echo $sum4 = 1200;
            break;
        case 5:
            echo "Laptop hp 4059 - s/.";
            echo $sum5 = 900;
            break;
        case 6:
            echo "Laptop hp 7085 - s/.";
            echo $sum6 = 750;
            break;
        case 7:
            echo "Tarjeta 1050ti - s/.";
            echo $sum7 = 350;
            break;
        case 8:
            echo "Mouse logitech - s/.";
            echo $sum8 = 50;
            break;
        default:
            break;
    }
    echo "<br/>";
}
?>
</td>
                </tr>  

       

                <tr>
                    <td>
                        Subtotal
                    </td>
                    <td><?php
                        $subtotal = $sum1 + $sum2 + $sum3 + $sum4 + $sum5 + $sum6 + $sum7 + $sum8;
                        echo "s/." . $subtotal;     ?></td>
                </tr>

                <tr>
                    <td> Igv </td>
                    <td><?php
                        $igv = 0.18;
                        $precioconigv = 0.18 * $subtotal;
                        echo "s/." . $precioconigv;
                        ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php
                        $total = $precioconigv + $subtotal;
                        echo "s/." . $total;
                        ?></td>
                </tr>

                </td>

            </tbody>
        </table>
          </main>
         <footer style="position: static; background: black; color: white; margin-top: 180px;">
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
