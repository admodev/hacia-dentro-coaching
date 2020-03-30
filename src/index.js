/* Menú responsive */
function hamburguerFunction() {
    var x = document.getElementById("navbarColor03");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

/* Generador de contraseñas */
function generatePassword(length, charset) {
    let password = "";
    for (let i = 0; i < length; ++i) {
        password += charset[
            Math.floor(
                Math.random() * charset.length
            )
        ];
    }

    return password;
}
