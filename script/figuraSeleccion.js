function figura() {
    var tipo = document.forms["figuras"]["tipo"].value;
    if (tipo == "cuadrado") {
        document.forms["figuras"]["lado_1"].disabled = false;
        document.forms["figuras"]["lado_2"].disabled = true;
        document.forms["figuras"]["lado_3"].disabled = true;
    } else if (tipo == "rectangulo") {
        document.forms["figuras"]["lado_1"].disabled = false;
        document.forms["figuras"]["lado_2"].disabled = false;
        document.forms["figuras"]["lado_3"].disabled = true;
    } else if (tipo == "triangulo") {
        document.forms["figuras"]["lado_1"].disabled = false;
        document.forms["figuras"]["lado_2"].disabled = false;
        document.forms["figuras"]["lado_3"].disabled = false;
    } else {
        document.forms["figuras"]["lado_1"].disabled = true;
        document.forms["figuras"]["lado_2"].disabled = true;
        document.forms["figuras"]["lado_3"].disabled = true;
    }
}