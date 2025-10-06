<?php

// Problema 1.1, Perfil de Usuario

$Nombre = "Hugo";
$Apellidos = "Lozano";
$Edad = 19;
$Altura = 1.75;
$Estudiante = true;

echo "Nombre: $Nombre, Apellidos: $Apellidos, Edad: $Edad, Altura: $Altura, ¿Es estudiante?: ". ($Estudiante? "si" : "no"). "<br>";


// Problema 1.2, Información de un producto
$Producto = "PC";
$Precio = 1999.99;
$Stock = 15;
$Oferta = false;
echo "Producto: $Producto, Precio: $Precio, Stock: $Stock, ¿En oferta?: " . ($Oferta ? "si" : "no") . " <br>";


// Problema 1.3, Constantes 
define ("NOMBRE_SITIO", "Mi Tienda Online");
define ("VERSION_APP", 1.0);
echo "Sitio: " . NOMBRE_SITIO . ", Versión: " . VERSION_APP . "<br>";


// Problema 2.1, Calculadora Básica
$num1 = 10;
$num2 = 5;
echo "Suma: " . ($num1 + $num2) . " Resta: " . ($num1 - $num2) . " Multiplicación: " . ($num1 * $num2) . " División: " . ($num1 / $num2) . "<br>";


// Problema 2.2, Actualización de Stock
$Stock = 100;
$Stock = $Stock - 20;
$Stock = $Stock + 50;
echo "Stock actual: $Stock <br>";


// Problema 2.3, Concatenación de Textos
$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";
$fraseCompleta = "El profesor $nombre $apellido imparte el curso de $curso.";
echo $fraseCompleta . "<br>";


// Problema 2.4, Comparaciones Simples
$edad = 20;
$edadMinima = 18;
var_dump($edad >= $edadMinima);
$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";
var_dump($contraseñaGuardada === $contraseñaUsuario);
echo "<br>";


// Problema 2.5, Par o Impar
$numero = 7;
if ($numero % 2 == 0) {
    echo "El número $numero es par.<br>";
} else {
    echo "El número $numero es impar.<br>";
}


// Problema 3.1, Control de Acceso
$edad = 17;
if ($edad >= 18) {
    echo "Puedes pasar <br>";
} else {
    echo "No puedes pasar<br>";
}


// Problema 3.2, Calificación de Examen
$nota = 7.5;
if ($nota >= 9){
    echo "Sobresaliente<br>";
}elseif ($nota >= 7 && $nota < 8.9){
    echo "Notable<br>";
}elseif ($nota >= 5 && $nota < 6.9){
    echo "Aprobado<br>";
}else{
    echo "Suspenso<br>";
}


// Problema 3.3, Menú del Día
$diaSemana = "lunes";


?>