window.onload = iniciar;
var expresion = /\w/;
function iniciar(){
    document.getElementById("enviarEditar").addEventListener("click", validar, false);

}
function validarNombre(){
    var valor = document.getElementById("nombre");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar un nombre");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al principio");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarEstreno(e){
    var valor = document.getElementById("estreno");
    if (valor.value === null || valor.value === ""){
        inputError(valor, "Debe ingresar un año de estreno");
       return false;
    }else if(isNaN(valor.value)){
        inputError(valor, "El año de estreno debe ser numérico");
       return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }
    else{
    borrarError(valor);
    return true;}
}

function validarDirector(){
    var valor = document.getElementById("director");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar el director de la película");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarProductor(){
    var valor = document.getElementById("productor");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar el productor de la película");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarCategoria(){
    var valor = document.getElementById("categoria");
    if (valor.value == null || valor.value == ""){
        selectError(valor, "Debe seleccionar una categoría");
        return false;
    }else{
    borrarErrorSelect(valor);
    return true;}
}

function validarIdioma(){
    var valor = document.getElementById("idioma");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar el idioma original de la película");
        return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }else{
    borrarError(valor);
    return true;}
}

function validarPresupuesto(){
    var valor = document.getElementById("presupuesto");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe ingresar el presupuesto de la película");
        return false;
    }else if(isNaN(valor.value)){
        inputError(valor, "El presupuesto debe ser numérico");
       return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }
    else{
    borrarError(valor);
    return true;}
}

function validarRecaudacion(){
    var valor = document.getElementById("recaudacion");
    if (valor.value == null || valor.value == ""){
        inputError(valor, "Debe el dinero recaudado por la película");
        return false;
    }else if(isNaN(valor.value)){
        inputError(valor, "La recaudación debe ser numérico");
       return false;
    }else if(!expresion.test(valor.value)){
        inputError(valor, "No puede ingresar espacios vacíos al pincipio");
        return false;
    }
    else{
    borrarError(valor);
    return true;}
}

function validar(e) {
    if (validarNombre() && validarEstreno() && validarDirector() && validarProductor() && validarCategoria() && validarIdioma() && validarPresupuesto() && validarRecaudacion()) {
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

function selectError(valor, msg){
    valor.value="";
    valor.className="mySelectError";
    valor.focus();
}

function borrarError(valor){
    valor.className="myInput";
}

function borrarErrorSelect(valor){
    valor.className="mySelect";
}

