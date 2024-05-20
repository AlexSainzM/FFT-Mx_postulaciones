//Primero traemos a los inputs del formulario y llegan limpios
let inputATPres = document.getElementById("inputATPresidente");
let inputProdPres = document.getElementById("inputProdPresidente");
let inputATSec = document.getElementById("inputATSecretario");
let inputProdSec = document.getElementById("inputProdSecretario");
let inputATAux1 = document.getElementById("inputATAuxiliar1");
let inputATAux2 = document.getElementById("inputATAuxiliar2");
let inputATAux3 = document.getElementById("inputATAuxiliar3");
let inputATAux4 = document.getElementById("inputATAuxiliar4");
let inputProdAux1 = document.getElementById("inputProdAuxiliar1");
let inputProdAux2 = document.getElementById("inputProdAuxiliar2");
let inputProdAux3 = document.getElementById("inputProdAuxiliar3");
let inputProdAux4 = document.getElementById("inputProdAuxiliar4");
let botonEnviarC = document.getElementById("botonEnviarCuestionario");

//Ahora creamos una funcion que limpie los datos del formulario inicialmente
inputATPres.value = "";
inputProdPres.value = "";
inputATSec.value = "";
inputProdSec.value = "";
inputATAux1.value = "";
inputATAux2.value = "";
inputATAux3.value = "";
inputATAux4.value = "";
inputProdAux1.value = "";
inputProdAux2.value = "";
inputProdAux3.value = "";
inputProdAux4.value = "";


//Inicializamos los contadores para la validación
let contadorGeneral = 0;
let contadorAT = 0;
let contadorProd = 0;


function inputsDeshabilitadosPres() {
    //Presidente

    if (inputATPres.value !== ""){
        //inputProdPres.value = "";
        inputProdPres.disabled = true;
        contadorAT =+ 1;
        console.log("AT" + contadorAT);
    } else {
        inputProdPres.disabled = false
        contadorAT = contadorAT - 1;
        console.log("AT" + contadorAT);
    }
    if (inputProdPres.value !== ""){
        //inputATPres.value = "";
        inputATPres.disabled = true;        
    } else {
        inputATPres.disabled = false;
    }

}

function inputsDeshabilitadosSec() {
    //Secretario

    if (inputATSec.value !== ""){
        //inputProdSec.value = "";
        inputProdSec.disabled = true;
        contadorAT = contadorAT + 1;
        console.log("AT" + contadorAT);
    } else {
        inputProdSec.disabled = false;
        contadorAT = contadorAT - 1;
        console.log("AT" + contadorAT);
    }
    if (inputProdSec.value !== ""){
        inputATSec.value = "";
        inputATSec.disabled = true;        
    } else {
        inputATSec.disabled = false;
    }

}

function inputsDeshabilitadosAux1() {
    //Auxiliar1

    if (inputATAux1.value !== ""){
        //inputProdAux1.value = "";
        inputProdAux1.disabled = true;
        contadorAT = contadorAT + 1;
        console.log("AT" + contadorAT);
    } else {
        inputProdAux1.disabled = false;
        contadorAT = contadorAT - 1;
        console.log("AT" + contadorAT);
    }
    if (inputProdAux1.value !== ""){
        inputATAux1.value = "";
        inputATAux1.disabled = true;        
    } else {
        inputATAux1.disabled = false;
    }

}


function inputsDeshabilitadosAux2() {
    //Auxiliar2

    if (inputATAux2.value !== ""){
        //inputProdAux2.value = "";
        inputProdAux2.disabled = true;
        contadorAT = contadorAT + 1;
        console.log("AT" + contadorAT);
    } else {
        inputProdAux2.disabled = false;
        contadorAT = contadorAT - 1;
        console.log("AT" + contadorAT);
    }
    if (inputProdAux2.value !== ""){
        inputATAux2.value = "";
        inputATAux2.disabled = true;        
    } else {
        inputATAux2.disabled = false;
    }

}

function inputsDeshabilitadosAux3() {
    //Auxiliar3 

    if (inputATAux3.value !== ""){
        //inputProdAux3.value = "";
        inputProdAux3.disabled = true;
        contadorAT = contadorAT + 1;
        console.log("AT" + contadorAT);
    } else {
        inputProdAux3.disabled = false;
        contadorAT = contadorAT - 1;
        console.log("AT" + contadorAT);
    }
    if (inputProdAux3.value !== ""){
        inputATAux3.value = "";
        inputATAux3.disabled = true;        
    } else {
        inputATAux3.disabled = false;
    }

}

function inputsDeshabilitadosAux4() {
    //Auxiliar4

    if (inputATAux4.value !== ""){
        //inputProdAux4.value = "";
        inputProdAux4.disabled = true;
        contadorAT = contadorAT + 1;
        console.log("AT" + contadorAT);
    } else {
        inputProdAux4.disabled = false;
        contadorAT = contadorAT - 1;
        console.log("AT" + contadorAT);
    }
    if (inputProdAux4.value !== ""){
        inputATAux4.value = "";
        inputATAux4.disabled = true;        
    } else {
        inputATAux4.disabled = false;
    }

}


function mostrarV() {
    console.log(contadorAT);
}
