window.onload = function(){
var btn = document.getElementById("btn");
var cover = document.getElementById("modal");
var control = true;
var mostrar = function(e){
  if(control == true){
  btn.classList.add("btnUno");
  cover.classList.add("fondo");
  e.preventDefault();
  control = false;
}else{
  control = true;
  btn.classList.remove("btnUno");
  cover.classList.remove("fondo");
}
}
btn.addEventListener("click", mostrar);
}

