<?php
$largo = readline("Ingrese el largo del terreno en metros: ");

$ancho = readline("Ingrese el ancho del terreno en metros: ");

/*Calcula el área total del terreno.*/
$areaTotal = $largo * $ancho;

/*Utilizo el operador ternario para determinar el tipo de cultivo adecuado.
 Si el área total es mayor o igual a 1000 metros cuadrados, es adecuado para cultivos extensivos.
 Y si es menor a 1000 metros cuadrados, es más adecuado para cultivos de jardín o huerto.*/

$mensaje = ($areaTotal >= 1000) ? "El terreno es adecuado para cultivos extensivos." : "El terreno es más adecuado para cultivos de jardín o huerto.";

echo $mensaje . "\n";
?>
