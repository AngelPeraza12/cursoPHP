<?php
// se utilizan las etiquetas de apertura y cierre unicamente cuando combinamos php con otro lenguaje como por ejemplo html -->
// las comillas dobles permiten variables y las simples no
// las variables se declaran con $
// las constantes se declaran con  define("nombreConstante", valorConstante)
// el punto y coma es obligatorio
// los operadores logicos se pueden usar igual que en los demas lenguages y de las dos formas ejm and y && o or y \\ -->
// los operadores aritmeticos son los mismos que en python
// hay un operador especial el de nave espacial  y fusion de NULL
// incremento y decremento es con += o  ++

$nombre = "angel";
define("NUMERO_PI", 3.1416);
$apellido = "peraza";
$edad = 28;
$aprobado = true;
$numero1 = 14;
$numero2 = "2";
$papas = "10 papas en el costal";


//php puede convertir un tipo de dato a otro de manera automatica segun el contexto 
// echo $numero1 + $numero2;

//aca dara el resultado pero dira un anuncio que no encontro valores numericos, pero hara la operacion (12)
// $cuantas_papas_hay = $papas + $numero2;
// echo $cuantas_papas_hay;

//los array se pueden definir de las dos formas o tambien con la funcion array.
$mi_array = array(1, 2, 3);
var_dump($mi_array);
// los arrays llevan llave valor en php se les llama array asociativos

$personas = [
    "carlos" => 23,
    "Kiara" => 15,
    "juan" => 65
];

// haciendo debuggin
// var_dump muestra informacion detallada de una variable
// print_r muestra la informacion mas ordenanda pero no da tanta info como var_dump

// var_dump($personas);
// print_r($personas);

//casting forzar que un tipo de dato se convierta en otro
// valores 0 o vacios son false

// $numerito = "5";
// var_dump($numerito);
// echo "\n";
// $numerito = (int) $numerito;
// var_dump($numerito);

// $edad = (bool) $edad;
// var_dump($edad);

// NAVE ESTAPCIAL <=>
// Evalua numeor de la izquierda es mayor al de la derecha da 1, si es menor da -1 y si es igual da 0.

// echo 2 <=> 1; // 1
// echo "<br>";
// echo 2 <=> 2; // 0
// echo "<br>";
// echo 1 <=> 2; // -1

// FUSION DE NULL ??
// nos dice cual es la primera variable definida
// si la variable 1 no esta definida, usa la variable 2 o 3 o 4 

// $edad_pepito = 23;
// echo $edad ?? $edad_pepito;

//PRESEDENCIA nos indica que es lo que se ejecuta primero dependiendo de la ASOCIATIVIDAD si esta es de izquierda o derecha

//echo 1 -3 -4; // de izquierda, ejecuta de izq a derecha -6
$a = 1;
$b = 2;
$c = "resultado";
// signo de asignacion ejecuta de derecha a izq
echo $a = $b =$c;