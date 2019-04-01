function login(form) {
    var un = form.Username.value;
    var pw = form.Password.value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("post", "Login", true);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            loginResults();
        }
    };
}

window.addEventListener(window,"load", function() {
    var loginForm = document.getElementById("LoginForm");
    window.addEventListener(loginForm, "submit", function() {
         login(loginForm);
     });
 });
 

 
 