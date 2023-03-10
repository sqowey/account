// The messages that refer to the codes
code_messages_en = {
    "00": "Success",
    "01": "Authentification Code<br>has expired",
    "02": "The passwords are<br>not the same",
    "03": "Authentification Code<br>is invalid",
    "04": "No matching<br>account found",
    "05": "The password<br>isn't matching the<br>password requirements",
    "97": "Error with<br>the Database",
    "98": "Error with<br>the Database",
    "99": "Error with<br>the Database"
};



// Get the message from the url
// Its the string between the ?c= and the &
// If there is no & in the url the message goes to the end of the url

// Get the url
var url = window.location.href;

// Check if there is an ?c= in the url
if (url.indexOf("?c=") > -1) {

    // Split out the code
    var code = url.split('?c=')[1];
    code = code.split('&')[0];

    // Check if there is a message
    if (code_messages_en[code] != undefined) {
        var message = code_messages_en[code];
    } else {
        var message = "Unknown error";
    }

    console.log(message);

    document.getElementById("errorOutputContainer").innerHTML = "<div id='errorOutput'>" + message + "</div>";
}

document.getElementById("errorOutputContainer").addEventListener("click", function() {

    // Remove the error message
    document.getElementById("errorOutputContainer").style.animation = "animation_close_error 0.5s";

    // Remove the error message after the animation is done
    setTimeout(function() {

        // Remove the error message
        document.getElementById("errorOutputContainer").style.display = "none";

    }, 500);

});