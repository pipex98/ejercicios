/**
 * Elabore un script que permita generar y almacenar 20 notas aleatorias entre 0 y 5,
 * estas deben de ser almacenadas en un array (array 1), luego se debe solicitar en pantalla
 * un número entero también entre 0 y 5 y almacenarlo en una variable llamada umbral, luego con los datos:
 * a. Mostrar una lista ordenada descendemente de las notas generadas
 * b. Mostrar cuántas y cuáles notas son mayores o iguales que el umbral.
 * c. Agrupar las notas del array1 de manera que queden en un subarray todos los 1, en otro array todos los 2, y asi sucesivamente 
 * hasta el 5. EJ:
 * [
 *  [1,1],
 *  [2,2,2],
 *  [3],
 *  ...
 *  [5,5]
 * ]
 * 
 */


let notas = new Array(); //Notas Aleatorias
let mayores = new Array(); //Notas mayores o iguales
let sub_array = new Array();
let sub_notas = new Array();

/**
 * Ciclo para llenar el Array de notas
 */
for (let a = 0; a < 20; a++) {
    notas.push( Math.round(Math.random() * (6)) );
}

/**
 * Ciclo para validar que el umbral sea válido
 */
do {
   aux = prompt("Ingrese un número entre 0 y 5: ");
} while(aux > 5 || aux < 0 || isNaN(aux));
// Se asigna el umbral
umbral = aux;

message("Notas: " + notas);

//Ordenamos las notas por orden descendentemente
notas_ordenadas = notas.sort();

/**
 * Ciclo para guardar las notas mayores o iguales al umbral
 */
for( let m = 0; m < notas.length; m++ ){
    if( notas[m] >= umbral ){
        mayores[m] = notas[m];
    }
}

message("Notas ordenadas descendentemente: ");
notas_ordenadas.forEach(nota => {
    message(nota);
});

/* Agrupamos los subarrays por notas iguales */
for( i = 0; i < 6; i++) {
    for(j = 0; j < notas.length; j++){
        if( notas[j] == i ){
            sub_array.push(i);
        }
    }
    sub_notas.push(sub_array);
    sub_array = [];
}

message("Las notas mayores o iguales al umbral son: ");
mayores.forEach(mayor => {
    message(mayor);
});

message("La cantidad de notas que superan o igualan el umbral es de: ");
message( mayores.length );

function message(msg){
    return console.log(msg);
}

message("Subarray de las notas");
message(sub_notas);