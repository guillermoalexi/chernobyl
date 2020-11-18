var reloj = document.getElementById("relojito");
var ctx = reloj.getContext("2d");
var color = '#59DF7A';
ctx.strokeStyle = 'lime';
ctx.lineWidth = 17;
ctx.lineCap = 'round';
ctx.shadowBlur = 15;
ctx.shadowColor = '#59df7a';

function grados(degree) 
{
    var factor = Math.PI / 180;
    return factor * degree;
}

function hacertiempo()
{
  var now = new Date();
  var today = now.toDateString();
  var time = now.toLocaleTimeString();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();
  var milliseconds = now.getMilliseconds();
  var newSconds = seconds + (milliseconds / 1000);
  
  //fondo
  var degradado = ctx.createRadialGradient(250,250,1,250,250,300);
  degradado.addColorStop(0,'#555C59');
  degradado.addColorStop(1,'black');
  
  ctx.fillStyle = degradado;
  
  ctx.fillRect(0, 0, 500, 500);
  
  //horas
  ctx.beginPath();
  ctx.arc(250,250,200,grados(270),grados((hours*15)-90));
  ctx.stroke();
  
  //minutos
  ctx.beginPath();
  ctx.arc(250,250,170,grados(270),grados((minutes*6)-90));
  ctx.stroke();
  
  //segundos
    
  ctx.beginPath();
  ctx.arc(250,250,140,grados(270),grados((newSconds*6)-90));
  ctx.stroke();
  
  //dia
  ctx.fillStyle = color;
  ctx.font = '24px Arial';
  ctx.fillText(today,170 ,250);
  
  //tiempo
  ctx.fillStyle = color;
  ctx.font = '15px Arial';
  ctx.fillText(time,170 ,280);
  
  }
  setInterval(hacertiempo,40);



