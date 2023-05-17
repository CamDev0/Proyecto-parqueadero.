var eye = document.getElementById('eye');
var pass = document.getElementById('pass');

eye.addEventListener("click", function(){

    if (pass.type == "password") {
        pass.type = "text"
        eye.style.opacity = 0.9
    }
    else {
        pass.type = "password"
        eye.style.opacity = 0.4
    }
})