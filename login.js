document.getElementById("SignIn").addEventListener("click", function (event) {
    event.preventDefault();

    var inputName = document.getElementById("inputName");
    var inputEmail = document.getElementById("inputEmail");
    var inputPassword = document.getElementById("inputPassword");
    var inputCPassword = document.getElementById("inputCPassword");
    if (inputName.value === "" || inputEmail.value === "" || inputPassword.value === "" || inputCPassword.value === "") {
        alert("Please fill the necessary details.");
        return;
    }
   
    window.location.href = "login.html";
});


