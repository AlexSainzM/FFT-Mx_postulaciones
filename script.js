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
botonEnviarC.disabled = true;




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


let ATValid = false;
let prodValid = false;

function noEsPrimero(valor, indice, lista) {
    return !(lista.indexOf(valor) === indice);
}

function noRepeatedATInputs() {
    let arrayAT = [];
    let arrayATValid = [];

    arrayAT.push(inputATPres.value);
    arrayAT.push(inputATSec.value);
    arrayAT.push(inputATAux1.value);
    arrayAT.push(inputATAux2.value);
    arrayAT.push(inputATAux3.value);
    arrayAT.push(inputATAux4.value);

    arrayAT.forEach(element => {
        if (element !== ""){
            arrayATValid.push(element);
        }
    });

    console.log(arrayATValid);
    console.log("aRRATatvalID tiene repetidos?", arrayATValid.some(noEsPrimero));
    if (arrayATValid.some(noEsPrimero) || arrayATValid.length !== 3) {
        ATValid = true;
    } else { ATValid = false; }
}

function noRepeatedProdInputs() {
    let arrayProd = [];
    let arrayProdValid = [];

    arrayProd.push(inputProdPres.value);
    arrayProd.push(inputProdSec.value);
    arrayProd.push(inputProdAux1.value);
    arrayProd.push(inputProdAux2.value);
    arrayProd.push(inputProdAux3.value);
    arrayProd.push(inputProdAux4.value);

    arrayProd.forEach(element => {
        if (element !== ""){
            arrayProdValid.push(element);
        }
    });

    console.log(arrayProdValid);
    console.log("aRRATProdvalID tiene repetidos?", arrayProdValid.some(noEsPrimero));
    if (arrayProdValid.some(noEsPrimero) || arrayProdValid.length !== 3) {
        prodValid = true;
    } else { prodValid = false; }
}


function validarFormularioFinal() {
    if (ATValid || prodValid){
        alert("No es posible nominar 2 veces a la misma persona, ni dejar campos vacios.");
        botonEnviarC.disabled = true;
    } else {
        botonEnviarC.disabled = false;
    }
}

function noReapeatedInputs() {
    noRepeatedATInputs();
    noRepeatedProdInputs();
    console.log("ATValid " + ATValid);
    console.log("ProdValid " + prodValid);
    validarFormularioFinal();
}



//validacion de valores repetidos
/*
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
*/


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

/*-----------------------------*/
//Input Presidente AT
let inputATPresEmptyBefore = true;
let inputATPresEmptyAfter = true;
function inputsDeshabilitadosPresAT() {

    if (inputATPres.value !== ""){
        //inputProdPres.value = "";
        inputProdPres.disabled = true;
        if (inputATPresEmptyBefore && inputATPresEmptyAfter) {
            if (contadorATSum(inputATPres)){inputProdPres.disabled = false;}
        }
        
        inputATPresEmptyBefore = false;

        if (!(inputATPresEmptyBefore && inputATPresEmptyAfter)) {
            if (!(inputATPres.value !== "")){
                inputATPresEmptyBefore = true;
            }
        }
        //contadorATSum(inputATPres);
    } else {
        inputProdPres.disabled = false;
        contadorATRes();
        inputATPresEmptyBefore = true;
    }
}


/*---------------------------------*/
//Input Presidente Prod
let inputProdPresEmptyBefore = true;
let inputProdPresEmptyAfter = true;
function inputsDeshabilitadosPresPR() {
    
    if (inputProdPres.value !== ""){
        //inputATPres.value = "";
        inputATPres.disabled = true;
        //contadorPRSum(inputProdPres);
        if (inputProdPresEmptyBefore && inputProdPresEmptyAfter) {
            if (contadorPRSum(inputProdPres)){inputATPres.disabled = false;}
        }

        inputProdPresEmptyBefore = false;

        if (!(inputProdPresEmptyBefore && inputProdPresEmptyAfter)) {
            if (!(inputProdPres.value !== "")){
                inputProdPresEmptyBefore = true;
            }
        }

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

        if (!(inputATSecEmptyBefore && inputATSecEmptyAfter)) {
            if (!(inputATSec.value !== "")){
                inputATSecEmptyBefore = true;
            }
        }
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

        if (!(inputProdSecEmptyBefore && inputProdSecEmptyAfter)) {
            if (!(inputProdSec.value !== "")){
                inputProdSecEmptyBefore = true;
            }
        }

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

        if (!(inputATAux1EmptyBefore && inputATAux1EmptyAfter)) {
            if (!(inputATAux1.value !== "")){
                inputATAux1EmptyBefore = true;
            }
        }

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

        if (!(inputProdAux1EmptyBefore && inputProdAux1EmptyAfter)) {
            if (!(inputProdAux1.value !== "")){
                inputProdAux1EmptyBefore = true;
            }
        }

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

        if (!(inputATAux2EmptyBefore && inputATAux2EmptyAfter)) {
            if (!(inputATAux2.value !== "")){
                inputATAux2EmptyBefore = true;
            }
        }

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

        if (!(inputProdAux2EmptyBefore && inputProdAux2EmptyAfter)) {
            if (!(inputProdAux2.value !== "")){
                inputProdAux2EmptyBefore = true;
            }
        }

    } else {
        inputATAux2.disabled = false;
        contadorPRRes();
        inputProdAux2EmptyBefore = true;
    }
}


let inputATAux3EmptyBefore = true;
let inputATAux3EmptyAfter = true;
function inputsDeshabilitadosAux3AT() {
    //Auxiliar3 

    if (inputATAux3.value !== ""){
        //inputProdAux3.value = "";
        inputProdAux3.disabled = true;
        //contadorATSum(inputATAux3);
        if (inputATAux3EmptyBefore && inputATAux3EmptyAfter) {
            if (contadorATSum(inputATAux3)){inputProdAux3.disabled = false;}
        }

        inputATAux3EmptyBefore = false;

        if (!(inputATAux3EmptyBefore && inputATAux3EmptyAfter)) {
            if (!(inputATAux3.value !== "")){
                inputATAux3EmptyBefore = true;
            }
        }

    } else {
        inputProdAux3.disabled = false;
        contadorATRes();
        inputATAux3EmptyBefore = true;
    }
}


let inputProdAux3EmptyBefore = true;
let inputProdAux3EmptyAfter = true;
function inputsDeshabilitadosAux3PR() {

    if (inputProdAux3.value !== ""){
        //inputATAux3.value = "";
        inputATAux3.disabled = true;    
        //contadorPRSum(inputProdAux3);    
        if (inputProdAux3EmptyBefore && inputProdAux3EmptyAfter) {
            if (contadorPRSum(inputProdAux3)){inputATAux3.disabled = false;}
        }

        inputProdAux3EmptyBefore = false;

        if (!(inputProdAux3EmptyBefore && inputProdAux3EmptyAfter)) {
            if (!(inputProdAux3.value !== "")){
                inputProdAux3EmptyBefore = true;
            }
        }

    } else {
        inputATAux3.disabled = false;
        contadorPRRes();
        inputProdAux3EmptyBefore = true;
    }

}


let inputATAux4EmptyBefore = true;
let inputATAux4EmptyAfter = true;
function inputsDeshabilitadosAux4AT() {
    //Auxiliar4

    if (inputATAux4.value !== ""){
        //inputProdAux4.value = "";
        inputProdAux4.disabled = true;
        //contadorATSum(inputATAux4);
        if (inputATAux4EmptyBefore && inputATAux4EmptyAfter) {
            if (contadorATSum(inputATAux4)){inputProdAux4.disabled = false;}
        }

        inputATAux4EmptyBefore = false;

        if (!(inputATAux4EmptyBefore && inputATAux4EmptyAfter)) {
            if (!(inputATAux4.value !== "")){
                inputATAux4EmptyBefore = true;
            }
        }

    } else {
        inputProdAux4.disabled = false;
        contadorATRes();
        inputATAux4EmptyBefore = true;
    }
}


let inputProdAux4EmptyBefore = true;
let inputProdAux4EmptyAfter = true;
function inputsDeshabilitadosAux4PR() {

    if (inputProdAux4.value !== ""){
        //inputATAux4.value = "";
        inputATAux4.disabled = true;
        //contadorPRSum(inputProdAux4);       
        if (inputProdAux4EmptyBefore && inputProdAux4EmptyAfter) {
            if (contadorPRSum(inputProdAux4)){inputATAux4.disabled = false;}
        }

        inputProdAux4EmptyBefore = false;

        if (!(inputProdAux4EmptyBefore && inputProdAux4EmptyAfter)) {
            if (!(inputProdAux4.value !== "")){
                inputProdAux4EmptyBefore = true;
            }
        }

    } else {
        inputATAux4.disabled = false;
        contadorPRRes();
        inputProdAux4EmptyBefore = true;
    }

}



//Función del botón enviar formulario. 
function botonSubmit() {
    noReapeatedInputs();
    
}
