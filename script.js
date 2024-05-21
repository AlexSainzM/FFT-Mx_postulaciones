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


//Ahora creamos limpiamos los datos del formulario antes de comenzar
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

//validacion de valores repetidos
function noReapeatedInputs() {
    //Primero obtenemos los valores de los inputs
    const inputs = [
        inputATPres.value,
        inputProdPres.value,
        inputATSec.value,
        inputProdSec.value,
        inputATAux1.value,
        inputATAux2.value,
        inputATAux3.value,
        inputATAux4.value,
        inputProdAux1.value, 
        inputProdAux2.value,
        inputProdAux3.value,
        inputProdAux4.value,
       
        ];

        //Creamos un objeto para rastrear las ocurrencias de cada valor. 
        const ocurrencias = {};
        console.log("hola");

        for (let i = 0; i < inputs.length; i++) {
            console.log("cuenta");
            const valor = inputs[i];
            if (ocurrencias[valor]){
                //Si el valor ya está en el objeto, incrementa el contador
                ocurrencias[valor]++;
            } else {
                ocurrencias[valor] = 1;
            }
        }

        //Verifica si hay algún valor con mas de una ocurrencia 
        for (let valor in ocurrencias) {
            if (ocurrencias[valor] > 1) {
                alert("Se han encontrado entradas repetidas. Por favor revisa tus respuestas. No es posible nominar 2 veces a la misma persona");
                return;
            }
        }

    alert('No hay entradas repetidas');

    
}


//Esta funcion retorna el valor del contador que este execiendo las 3 posibles selecciones. 
function validacion3v3() {

    if (contadorAT >= 4) {
        return contadorAT;
    } else {
        if (contadorProd >= 4){
            return contadorProd;
        }
    }
}


//Esta funcion para AT, verifica que no existan más de tres entradas y en caso de que si (que llegue a 4), limpia el ultimo elemento, envia una alerta y regresa el contador a 3. 
function contadorATSum(inputElement){
    contadorAT = contadorAT + 1;
    console.log("AT" + contadorAT);
    
    if (validacion3v3() >= 4){
        inputElement.value = "";
        contadorAT = contadorAT - 1;
        console.log("AT" + contadorAT);
        inputElement.disabled = false;
        alert("Ya has seleccionado a 3 personas del personal AT");
        return true;
    } 
}


//Esta funcion para AT, resta en 1 al contador de AT en caso de que el usuario limpie alguna de las casillas de AT. 
function contadorATRes() {
    contadorAT = contadorAT - 1;
    console.log("AT" + contadorAT);
}


////Esta funcion para Prod, verifica que no existan más de tres entradas y en caso de que si (que llegue a 4), limpia el ultimo elemento, envia una alerta y regresa el contador a 3.
function contadorPRSum(inputElement){
    contadorProd = contadorProd + 1;
    console.log("PR" + contadorProd);
    
    if (validacion3v3() >= 4){
        inputElement.value = "";
        contadorProd = contadorProd - 1;
        console.log("PR" + contadorProd);
        inputElement.disabled = false;
        alert("Ya has seleccionado a 3 personas del personal PR");
        return true;
    }
}


//Esta funcion para Prod, resta en 1 al contador de producción en caso de que el usuario limpie alguna de las casillas de Prod.
function contadorPRRes() {
    contadorProd = contadorProd - 1;
    console.log("PR" + contadorProd);
}


//Las siguientes funciones se ejecutan dependiendo del par de inputs en el que se este trabajando (Pres, Sec, Aux1, Aux2, Aux3, Aux4). Evalua el par y deshabilita su contra parte en caso de que se llene información en alguno de lo los pares de campos anteriormente mencionados. 
//Las funciones contadorATSum y contadorATRes controlan los contadores de AT y respectivamente lo hacen las funciones PROD o PR. 
//Estas funciones hacen llamados a otras funciones que validad que no exitan mas de 3 campos para AT, controlan los contadores, habilitan y deshabilitan los inputs y dan las alertas correspondientes.

let inputATPresEmptyBefore = true;
let inputATPresEmptyAfter = true;
function inputsDeshabilitadosPresAT() {
    
    //PresidenteAT

    if (inputATPres.value !== ""){
        //inputProdPres.value = "";
        inputProdPres.disabled = true;
        if (inputATPresEmptyBefore && inputATPresEmptyAfter) {
            if (contadorATSum(inputATPres)){inputProdPres.disabled = false;}
        }
        inputATPresEmptyBefore = false;
        //contadorATSum(inputATPres);
    } else {
        inputProdPres.disabled = false;
        contadorATRes();
        inputATPresEmptyBefore = true;
    }
}

let inputProdPresEmptyBefore = true;
let inputProdPresEmptyAfter = true;
function inputsDeshabilitadosPresPR() {
    
    //PresidentePR
    if (inputProdPres.value !== ""){
        //inputATPres.value = "";
        inputATPres.disabled = true;
        //contadorPRSum(inputProdPres);
        if (inputProdPresEmptyBefore && inputProdPresEmptyAfter) {
            if (contadorPRSum(inputProdPres)){inputATPres.disabled = false;}
        }
        inputProdPresEmptyBefore = false;
    } else {
        inputATPres.disabled = false;
        contadorPRRes();
        inputProdPresEmptyBefore = true;
    }
}


let inputATSecEmptyBefore = true;
let inputATSecEmptyAfter = true;
function inputsDeshabilitadosSecAT() {
    //SecretarioAT

    if (inputATSec.value !== ""){
        //inputProdSec.value = "";
        inputProdSec.disabled = true;
        //contadorATSum(inputATSec);
        if (inputATSecEmptyBefore && inputATSecEmptyAfter){
            if (contadorATSum(inputATSec)){inputProdSec.disabled = false;}
        }
        inputATSecEmptyBefore = false;
        //noReapeatedInputs();
    } else {
        inputProdSec.disabled = false;
        contadorATRes();
        inputATSecEmptyBefore = true;
    }
}


let inputProdSecEmptyBefore = true;
let inputProdSecEmptyAfter = true;
function inputsDeshabilitadosSecPR() {

    if (inputProdSec.value !== ""){
        //inputATSec.value = "";
        inputATSec.disabled = true;  
        //contadorPRSum(inputProdSec);
        if (inputProdSecEmptyBefore && inputProdSecEmptyAfter) {
            if (contadorPRSum(inputProdSec)){inputATSec.disabled = false;}
        }
        inputProdSecEmptyBefore = false;
    } else {
        inputATSec.disabled = false;
        contadorPRRes();
        inputATSecEmptyBefore = true;
    }
}


let inputATAux1EmptyBefore = true;
let inputATAux1EmptyAfter = true;
function inputsDeshabilitadosAux1AT() {
    //Auxiliar1AT

    if (inputATAux1.value !== ""){
        //inputProdAux1.value = "";
        inputProdAux1.disabled = true;
        //contadorATSum(inputATAux1);
        if (inputATAux1EmptyBefore && inputATAux1EmptyAfter){
            if (contadorATSum(inputATAux1)){inputProdAux1.disabled = false;}
        }
        inputATAux1EmptyBefore = false;
    } else {
        inputProdAux1.disabled = false;
        contadorATRes();
        inputATAux1EmptyBefore = true;
    }
}


let inputProdAux1EmptyBefore = true;
let inputProdAux1EmptyAfter = true;
function inputsDeshabilitadosAux1PR() {
    //Auxiliar1PR

    if (inputProdAux1.value !== ""){
        //inputATAux1.value = "";
        inputATAux1.disabled = true;        
        //contadorPRSum(inputProdAux1);
        if (inputProdAux1EmptyBefore && inputProdAux1EmptyAfter) {
            if (contadorPRSum(inputProdAux1)){inputATAux1.disabled = false;}
        }
        inputProdAux1EmptyBefore = false;
    } else {
        inputATAux1.disabled = false;
        contadorPRRes();
        inputProdAux1EmptyBefore = true; 
    }
}


let inputATAux2EmptyBefore = true;
let inputATAux2EmptyAfter = true;
function inputsDeshabilitadosAux2AT() {
    //Auxiliar2AT

    if (inputATAux2.value !== ""){
        //inputProdAux2.value = "";
        inputProdAux2.disabled = true;
        //contadorATSum(inputATAux2);
        if (inputATAux2EmptyBefore && inputATAux2EmptyAfter) {
            if (contadorATSum(inputATAux2)){inputProdAux2.disabled = false;}
        }
        inputATAux2EmptyBefore = false;
    } else {
        inputProdAux2.disabled = false;
        contadorATRes();
        inputATAux2EmptyBefore = true;
    }
}


let inputProdAux2EmptyBefore = true;
let inputProdAux2EmptyAfter = true;
function inputsDeshabilitadosAux2PR() {
    //Auxiliar2PR

    if (inputProdAux2.value !== ""){
        //inputATAux2.value = "";
        inputATAux2.disabled = true;   
        //contadorPRSum(inputProdAux2);     
        if (inputProdAux2EmptyBefore && inputProdAux2EmptyAfter) {
            if (contadorPRSum(inputProdAux2)){inputATAux2.disabled = false;}
        }
        inputProdAux2EmptyBefore = false;
    } else {
        inputATAux2.disabled = false;
        contadorPRRes();
        inputProdAux2EmptyBefore = true;
    }
}

function inputsDeshabilitadosAux3AT() {
    //Auxiliar3 

    if (inputATAux3.value !== ""){
        //inputProdAux3.value = "";
        inputProdAux3.disabled = true;
        //contadorATSum(inputATAux3);
        if (contadorATSum(inputATAux3)){inputProdAux3.disabled = false;}

    } else {
        inputProdAux3.disabled = false;
        contadorATRes();
    }
}

function inputsDeshabilitadosAux3PR() {

    if (inputProdAux3.value !== ""){
        //inputATAux3.value = "";
        inputATAux3.disabled = true;    
        //contadorPRSum(inputProdAux3);    
        if (contadorPRSum(inputProdAux3)){inputATAux3.disabled = false;}

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
        //contadorATSum(inputATAux4);
        if (contadorATSum(inputATAux4)){inputProdAux4.disabled = false;}

    } else {
        inputProdAux4.disabled = false;
        contadorATRes();
    }
}

function inputsDeshabilitadosAux4PR() {

    if (inputProdAux4.value !== ""){
        //inputATAux4.value = "";
        inputATAux4.disabled = true;
        //contadorPRSum(inputProdAux4);       
        if (contadorPRSum(inputProdAux4)){inputATAux4.disabled = false;}

    } else {
        inputATAux4.disabled = false;
        contadorPRRes();
    }

}



//Función del botón enviar formulario. 
function botonSubmit() {
    noReapeatedInputs();
}
