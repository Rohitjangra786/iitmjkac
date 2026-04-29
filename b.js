document.addEventListener('DOMContentLoaded', (event) => {
    // Get the popup
    var popup = document.getElementById("popupForm");       //FOR SELECTING THE POPUPFORM

    // Show the popup
    popup.style.display = "block";                          //SHOWING THE FORM

    // Get the <span> element that closes the popup
    var span = document.getElementsByClassName("close")[0]; //SELECTING THE CLOSE ICON

    // When the user clicks on <span> (x), close the popup
    span.onclick = function() {
        popup.style.display = "none";                       //MAKING CLICK FUNCTION
    }

    // When the user clicks anywhere outside of the popup, close it
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";                   //POPUP CLOSE IF ANYONE CLICK OUTSIDE
        }
    }
});
