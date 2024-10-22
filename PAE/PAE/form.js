function usrpas() {
    if (document.form1.txt.value == "Pae" && document.form1.num.value == "1234" ||
        document.form1.txt.value == "Programa de alimentacion" && document.form1.num.value == "1234") {
        window.location = "listado.html";
    } else {
        alert("Error en Usuario o Contraseña. Intenta de nuevo.");
    }
}
document.oncontextmenu = new Function("return false");
