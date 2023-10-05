const form = document.getElementById("loginForm");

form.addEventListener("submit", function (e) {
    e.preventDefault()

    const username = document.getElementById("username").value;

    //constante que contiene los caracteres especiales 
    const caracteresEspeciales = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

    if (username.length == 0 || username.length == null || !caracteresEspeciales.test(username)) {
        alert("El nombre no es valido")
        return;
    }


    const password = document.getElementById("password").value;

    if (password.length < 8 || password.length == 0 || password.length == null) {
        alert("La contraseña no es valida");
        return;
    }

    console.log("username:", username);
    console.log("password:", password);
});
