//login popup
var table = document.getElementById('login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == table) {
        table.style.display = "none";
    }

}