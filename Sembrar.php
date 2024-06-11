<?php
$mes = readline("Ingrese el mes actual (ejemplo: enero, febrero, etc.): ");

/* Converto el mes a minúsculas para evitar problemas de mayúsculas/minúsculas*/
$mes = strtolower($mes);

 /*Por defecto, si no es un mes, muestro el mensaje 
 "El valor ingresado no es un mes" */

if(
    !($mes == "enero" || $mes == "febrero" || $mes == "marzo" || $mes == "abril" || $mes == "mayo" || $mes == "junio" || $mes == "julio" || 
 $mes == "agosto" || $mes == "septiembre" || $mes == "octubre" || $mes == "noviembre" || $mes == "octubre" || $mes == "noviembre" || $mes == "diciembre"))
 {
    echo "El valor ingresado no es un mes";
    exit;
 };
 /*
Utilizo el operador ternario para determinar el método de siembra adecuado.
 Si el mes es abril, mayo, junio, julio, agosto, septiembre, octubre o noviembre, se debe usar la siembra en almácigo.
 y si el mes es  diciembre, enero, febrero o marzo, se puede realizar la siembra directo*/


$esInvierno = ($mes == "abril" || $mes == "mayo" || $mes == "junio" || $mes == "julio" || 
               $mes == "agosto" || $mes == "septiembre" || $mes == "octubre" || $mes == "noviembre");

$mensaje = ($esInvierno) ? "Se debe usar la siembra en almácigo." : "Se puede realizar la siembra directa.";

echo $mensaje . "\n";
?>
