<?php
$cantidad = readline("Ingrese la cantidad de camisas compradas: ");

$precioUnitario = readline("Ingrese el precio unitario de cada camisa: ");


/* Multiplicamos la cantidad de camisas por el precio unitario para obtener el costo total antes de aplicar cualquier descuento.*/
$subtotal = $cantidad * $precioUnitario;

 /*el descuento sera según la cantidad de camisas.
 Si la cantidad de camisas es 3 o más, aplicamos un descuento del 20%,
 y si la cantidad de camisas es menos de 3, aplicamos un descuento del 10%.*/
 
 $descuento = ($cantidad >= 3) ? 0.20 : 0.10;

/*Calcula el monto del descuento y el total a pagar.
 Calculamos cuánto dinero representa el descuento y lo restamos del subtotal para obtener el total final a pagar.*/

$montoDescuento = $subtotal * $descuento;
$totalPagar = $subtotal - $montoDescuento;

echo "El total a pagar después del descuento es: $totalPagar\n";
?>
