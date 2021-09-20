

<?php 

/**
 * Elabore un script PHP que permita generar y almacenar 100 notas aleatorias entre 1.0 y 5.0 estas deben de ser almacenadas
 * en un array, luego se debe de generar también aleatoriamente una variable llamada umbral y asignarle un valor aleatorio
 * entre 3.0 y 3.5, y luego con estos datos
 * 
 * a. Mostrar una lista ordenada descendentemente de las notas generadas
 * b. Mostrar cuántas y cuáles notas mayores o iguales que el umbral
 */ 

function notas_aleatorias(){
	for($i=0; $i<100; $i++){
		$aleatorio= rand(10,50) / 10;
		$resultado[$i]=$aleatorio;
	}
	return $resultado;
}

$array1= notas_aleatorias(); 
echo "Aquí tengo el array1 generado: <br>";
echo json_encode($array1)."<br><br>"; 

$umbral=rand(30, 35)/10;

echo "Esta es la variable umbral: <br>".$umbral."<br><br>";

$order_desc = array_multisort($array1, SORT_DESC);//Ordenamos el array1 descendentemente

echo "Aquí viene la lista ordenada descendentemente: <br>";

for ($i=0; $i<100 ; $i++) {
	echo json_encode($array1[$i])."<br>";
}

//Cantidad de notas mayores o iguales a umbral
$mayores_iguales=0;
for ($i=0; $i<100; $i++) { 
	if ($array1[$i]>=$umbral) {
		$array_mayores_iguales[$mayores_iguales]=$array1[$i];
		$mayores_iguales++;
	}
}

echo "<br>Cantidad de notas mayores o iguales a umbral: <br>".$mayores_iguales."<br><br>";

//Especificamos cuales notas son mayores o iguales

echo "Las notas mayores o iguales son: <br>";

for ($i=0; $i<$mayores_iguales; $i++) { 
	echo json_encode($array_mayores_iguales[$i])."<br>";
}

// echo "<br>El array que contiene los subarrays agrupados por notas: <br>".json_encode($array2)."<br><br><br><br>";

?>