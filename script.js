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
let contadorAT = 3;
let contadorProd = 0;

function validacion3v3() {

    if (contadorAT >= 4) {
        //inputATPres.disabled = true;
        //alert("Ya has seleccionado a 3 personas del personal AT");
        return contadorAT;
    } else {
        if (contadorProd >= 4){
            //alert("Ya has seleccionado a 3 personas del personal de Producción");
            return contadorProd;
        }
    }
    
}

alert("prueba");

function contadorATSum(inputElement){
    contadorAT = contadorAT + 1;
    console.log("AT" + contadorAT);
    //validacion3v3();
    if (validacion3v3() >= 4){
        inputElement.value = "";
    } 
}

function contadorATRes() {
    contadorAT = contadorAT - 1;
    console.log("AT" + contadorAT);
    validacion3v3();
}

function contadorPRSum(){
    contadorProd = contadorProd + 1;
    console.log("PR" + contadorProd);
    validacion3v3();
}

function contadorPRRes() {
    contadorProd = contadorProd - 1;
    console.log("PR" + contadorProd);
    validacion3v3();
}


function inputsDeshabilitadosPresAT() {
    
    //PresidenteAT

    if (inputATPres.value !== ""){
        //inputProdPres.value = "";
        inputProdPres.disabled = true;
        contadorATSum(inputATPres);
    } else {
        inputProdPres.disabled = false
        contadorATRes();
    }
}

function inputsDeshabilitadosPresPR() {
    
    //PresidentePR
    if (inputProdPres.value !== ""){
        //inputATPres.value = "";
        inputATPres.disabled = true;
        contadorPRSum();
    } else {
        inputATPres.disabled = false;
        contadorPRRes();
    }
}

function inputsDeshabilitadosSecAT() {
    //SecretarioAT

    if (inputATSec.value !== ""){
        //inputProdSec.value = "";
        inputProdSec.disabled = true;
        contadorATSum();
    } else {
        inputProdSec.disabled = false;
        contadorATRes();
    }
}

function inputsDeshabilitadosSecPR() {

    if (inputProdSec.value !== ""){
        //inputATSec.value = "";
        inputATSec.disabled = true;  
        contadorPRSum();      
    } else {
        inputATSec.disabled = false;
        contadorPRRes();
    }
}

function inputsDeshabilitadosAux1AT() {
    //Auxiliar1AT

    if (inputATAux1.value !== ""){
        //inputProdAux1.value = "";
        inputProdAux1.disabled = true;
        contadorATSum();
    } else {
        inputProdAux1.disabled = false;
        contadorATRes();
    }
}

function inputsDeshabilitadosAux1PR() {
    //Auxiliar1PR

    if (inputProdAux1.value !== ""){
        //inputATAux1.value = "";
        inputATAux1.disabled = true;        
        contadorPRSum();
    } else {
        inputATAux1.disabled = false;
        contadorPRRes();
    }

}


function inputsDeshabilitadosAux2AT() {
    //Auxiliar2AT

    if (inputATAux2.value !== ""){
        //inputProdAux2.value = "";
        inputProdAux2.disabled = true;
        contadorATSum();
    } else {
        inputProdAux2.disabled = false;
        contadorATRes();
    }
}

function inputsDeshabilitadosAux2PR() {
    //Auxiliar2PR

    if (inputProdAux2.value !== ""){
        //inputATAux2.value = "";
        inputATAux2.disabled = true;   
        contadorPRSum();     
    } else {
        inputATAux2.disabled = false;
        contadorPRRes();
    }
}

function inputsDeshabilitadosAux3AT() {
    //Auxiliar3 

    if (inputATAux3.value !== ""){
        //inputProdAux3.value = "";
        inputProdAux3.disabled = true;
        contadorATSum();
    } else {
        inputProdAux3.disabled = false;
        contadorATRes();
    }
}

function inputsDeshabilitadosAux3PR() {

    if (inputProdAux3.value !== ""){
        //inputATAux3.value = "";
        inputATAux3.disabled = true;    
        contadorPRSum();    
    } else {
        inputATAux3.disabled = false;
        contadorPRRes();
    }

}

function inputsDeshabilitadosAux4AT() {
    //Auxiliar4

    if (inputATAux4.value !== ""){
        //inputProdAux4.value = "";
        inputProdAux4.disabled = true;
        contadorATSum();
    } else {
        inputProdAux4.disabled = false;
        contadorATRes();
    }
}

function inputsDeshabilitadosAux4PR() {

    if (inputProdAux4.value !== ""){
        //inputATAux4.value = "";
        inputATAux4.disabled = true;
        contadorPRSum();       
    } else {
        inputATAux4.disabled = false;
        contadorPRRes();
    }

}


function mostrarV() {
    console.log(contadorAT);
}
