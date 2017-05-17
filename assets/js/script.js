window.onload = function(){ 
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("Reg");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


//Facebook

// Get the modal
var modal_fb = document.getElementById('myModal_fb');

// Get the button that opens the modal
var btn_fb = document.getElementById("btn_fb");

var span_fb = document.getElementsByClassName("close_fb")[0];

btn_fb.onclick = function() {
    modal_fb.style.display = "block";
}

span_fb.onclick = function() {
    modal_fb.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal_fb) {
        modal_fb.style.display = "none";
    }
}

};