
//Primero traemos a los inputs del formulario y llegan limpios
let inputATPres = document.getElementById("inputATPresidente");
let inputProdPres = document.getElementById("inputProdPresidente");
let inputATSec = document.getElementById("inputATSecretario");
let inputProdSec = document.getElementById("inputProdSecretario");
let inputATAux1 = document.getElementById("inputATAuxiliar1");
let inputATAux2 = document.getElementById("inputATAuxiliar2");
let inputATAux3 = document.getElementById("inputATAuxiliar3");
let inputProdAux1 = document.getElementById("inputProdAuxiliar1");
let inputProdAux2 = document.getElementById("inputProdAuxiliar2");
let inputProdAux3 = document.getElementById("inputProdAuxiliar3");

//Ahora creamos una funcion que limpie los datos del formulario inicialmente

inputATPres.value = "Hola";
inputProdPres.value = "Hola";

console.log("hola");

function inputsDeshabilitados() {
    if (inputATPres.value !== ""){
        inputProdPres.value = "";
        inputProdPres.disabled = true;
    } else {
        inputProdPres.disabled = false;
    }
    if (inputProdPres.value !== ""){
        inputATPres.value = "";
        inputATPres.disabled = true;        
    } else {
        inputATPres.disabled = false;
    }
}
