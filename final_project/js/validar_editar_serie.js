window.onload = iniciar;
var expresion = /\w/;
function iniciar(){
    document.getElementById("enviarSerieEdit").addEventListener("click", validar, false);

}
function validarCorreo(){
    var valor = document.getElementById("correo");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar un email");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al principio");
        return false;
    }else{
    borrarError(valor);
    return true;}

}

function validarUsuario(){
    var valor = document.getElementById("usuario");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar un nombre de usuario");
       return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }
    else{
    borrarError(valor);
    return true;}
}

function validarNombre(){
    var valor = document.getElementById("nombre");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar el nombre de la serie");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarPuntuacion(){
    var valor = document.getElementById("puntuacion");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar la puntuación de la serie");
        return false;
    }else if(isNaN(valor.value)){
        inputError(valor, "La puntuación debe ser numérica");
        return false;
    }else if(valor.value.length > 2 || valor.value > 10){
        inputError(valor, "La puntuación debe ser entre 1 y 10");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarIdioma(){
    var valor = document.getElementById("idioma");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar el idioma de la serie");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarEstreno(){
    var valor = document.getElementById("estreno");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar el año de estreno de la serie");
        return false;
    }else if(isNaN(valor.value)){
        inputError(valor, "El año de estreno de ser numérico");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarTemporadas(){
    var valor = document.getElementById("temporadas");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar la cantidad de temporadas de la serie");
        return false;
    }else if(isNaN(valor.value)){
        inputError(valor, "La cantidad de temporads debe ser numérica");
       return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }
    else{
    borrarError(valor);
    return true;}
}

function validarComentario(){
    var valor = document.getElementById("recaudacion");
    if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }
    else{
    borrarError(valor);
    return true;}
}

function validar(e) {
    if (validarCorreo() && validarUsuario() && validarNombre() && validarPuntuacion() && validarIdioma() && validarEstreno() && validarTemporadas() && validarComentario()) {
        return true;
    }else{
        e.preventDefault();
        return false;
    }
}

function inputError(valor, msg){
    valor.value="";
    valor.placeholder=msg;
    valor.className="myInput_error";
    valor.focus();
}

function borrarError(valor){
    valor.className="myInput";
}
