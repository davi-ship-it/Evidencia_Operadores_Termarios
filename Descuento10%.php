<?php
echo "Ingrese la cantidad de artículos comprados: ";
$cantidad = readline();

echo "Ingrese el precio unitario de cada artículo: ";
$precio = readline();

/*en el if, is_numeric es un método que verifica si la entrada de cantidad y precio es un número, y en despues verifico que la cantidad y el precio sean mayores a cero para realizar las operaciones al hacer el descuento, al cual tambien se le verifica si la cantidad del producto supera 10 unidades */ 

if (is_numeric($cantidad) && is_numeric($precio) && $cantidad > 0 && $precio > 0) {

    /** la formula de la operacion en un ejemplo es: 
     * cantidad: 10,
     * precio: 1000,
     * 
     * 10*1000= 10000,
     * 10000 - (10000*0.10)
     * igual a 9000
     */
    $total = $cantidad * $precio;
    $descuento = ($cantidad >= 10) ? 0.10 : 0.0;
    $total_con_descuento = $total - ($total * $descuento);
    /* 
    number_format se encarga de mostrar la cantidad en un formato establecido(depende de la cantidad y como se quiera mostrar las separaciones, ya sean "." o ","), utilizando dos parámetros: el de entrada y el que añade comas a la cantidad si es decimal(por lo que vi, resive 4 parametros, pero este caso utilizamos solo 2).*/

    echo "Total a pagar: $" . number_format($total_con_descuento, 2) . PHP_EOL;
/** y PHP_EOL simplemente detecta los saltos de línea, que varían entre Windows y Mac, para evitar errores y no amontonar el código. */

    
} else {
    echo "Por favor, ingrese valores válidos para la cantidad y el precio." . PHP_EOL;
}
// Este es el segundo comentario: Cálculo final del precio después del descuento
?>

