<?php
$edad = readline("Ingrese su edad: ");

/* Uso un operador ternario para determinar el mensaje adecuado según la edad.

 Si la edad es mayor o igual a 18, preguntamos por la licencia de conducir, y
 si tiene licencia, puede conducir; de lo contrario, debe obtener una licencia primero
 Si la edad es menor de 18, no puede conducir*/

$mensaje = ($edad >= 18) 
? (readline("¿Tienes licencia de conducir? (sí/no): ") == "sí" 
? "Puedes conducir" 
: "Debes obtener una licencia de conducir primero") 
: "No puedes conducir";

echo $mensaje . "\n";
?>
