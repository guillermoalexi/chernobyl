 
 
 function abrir(){
             document.getElementById("vent").style.display="block";
         }


 function cerrar(){
             document.getElementById("vent").style.display="none";
         }
         
 
         
             function subir() {
            var circulo=document.getElementById("circle");

            var rotate =circulo.style.transform;
            var rotatesuma;
            
                rotatesuma=rotate + "rotate(-90deg)";
                circulo.style.transform = rotatesuma;
                rotate=rotatesuma;
            }
            
            function bajar() {
                    var circulo=document.getElementById("circle");
            var rotate =circulo.style.transform;
            var rotatesuma;
            
                rotatesuma=rotate + "rotate(90deg)";
                circulo.style.transform = rotatesuma;
                rotate=rotatesuma;
            }



            var arrayImagenes = ["asus.png", 
                "foto.png", "memoria ram.png"
                ,"proces.png","case.png","Charizard.png"];

            //que imagen mostramos
            var imagenActual = 0;

            //Cada 2 segundos se ejecute esta funcion
            var temporizador;
            temporizador = setInterval(cambiarImagen, 3000);

            //paso 2: listeners de los botones de anterior y siguiente
            function cambia(){
            document.getElementById("anterior").addEventListener("click", cambiarImagen);
            }
            function ta(){
            document.getElementById("siguiente").addEventListener("click", cambiarImagen);
            }
            document.getElementById('imagen').addEventListener('mouseover', pararTemporizador);
            document.getElementById('imagen').addEventListener('mouseout', iniciarTemporizador);

            //paso 3: Definir la función
            function cambiarImagen() {
                var boton = this.id;
                if(boton!=undefined) {
                    clearInterval(temporizador);
                    temporizador=setInterval(cambiarImagen, 3000);
                }
                if(boton == "anterior") {
                    imagenActual --;
                    if(imagenActual < 0) {
                        imagenActual = arrayImagenes.length -1; 
                    } 
                } else {
                    imagenActual ++;
                    if(imagenActual == arrayImagenes.length) {
                        imagenActual = 0;
                    } 
                }
                var imagenAMostrar = arrayImagenes [imagenActual];
                document.getElementById('imagen').src ='imagenes/' + imagenAMostrar;
            }

            function pararTemporizador() {
                clearInterval(temporizador);
            }

            function iniciarTemporizador () {
                temporizador=setInterval(cambiarImagen, 3000);

            }



