document.getElementById("Login").addEventListener("click", function (event) {
    event.preventDefault();

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    if (email.value === "" || password.value === "") {
        alert("Please fill the necessary details.");
        return;
    }

    window.location.href = "register.html";
});
