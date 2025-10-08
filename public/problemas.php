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
    $diaSemana = "Lunes";
    switch ($diaSemana) {
        case "Lunes": echo "Lentejas <br>";
        break;
        case "Miercoles": echo "Paella <br>";
        break;
        case "Viernes": echo "Pescado al horno <br>";
        break;
        default: echo "Hoy no hay menú especial <br>";
        break;
    }


    // Problema 3.4, Verificación de Usuario Avanzada
    $rolUsuario = "admin";
    $usuarioActivo = true;
    if ($usuarioActivo && $rolUsuario === "admin") {
        echo "Acceso concedido <br>";
    }else {
        echo "Acceso denegado <br>";
    }


    // Problema 4.1, Tabla de Multiplicar del 7
    for ($i = 0; $i <=10; $i++){
        echo "7 x $i = " . ($i*7) . "<br>";
    }


    // Problema 4.2, Cuenta Atras para Año Nuevo
    $i = 10;
    while ($i >= 0) {
        echo $i . "<br>";
        $i--;
    }
    echo "¡Feliz Año Nuevo! <br>";


    // Problema 4.3, Recorrer Nombres
    $alumnos = ["Ana", "Juan", "Pedro", "Sofía"];
    foreach ($alumnos as $alumno){
        echo "Hola, " . $alumno . "<br>";
    }


    // Problema 4.4, Listado de Productos
    $productos = [
        ["nombre" => "Teclado", "precio" => 50],
        ["nombre" => "Ratón", "precio" => 25],
        ["nombre" => "Monitor", "precio" => 200]
    ];
    foreach ($productos as $producto){
        echo "Producto: " . $producto["nombre"] . ", ";
        echo "Precio: " . $producto["precio"] . "€ <br>";
    }


    // Problema 5.1, Ficha de Usuario
    $usuario = [
        "nombre" => "Hugo",
        "edad" => 19,
        "email" => "Hugo@correo.com",
        "estudia" => true
    ];
    echo "Nombre: " . $usuario["nombre"] . "<br>";
    echo "Edad: " . $usuario["edad"] . "<br>";
    echo "Correo: " . $usuario["email"] . "<br>";
    echo "¿Está estudiando?: " . ($usuario["estudia"]? "Sí, estudia":"No estudia") . "<br>";


    // Problema 5.2, Filtrado de Notas
    $notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];
    foreach ($notas as $nota){
        if ($nota >= 5){
            echo $nota . "<br>";
        }

    }


    // Problema 5.3, Lista de la Compra Avanzada
    $listaCompra = [
        "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
        "Lácteos" => ["Leche", "Queso"],
        "Limpieza" => ["Detergente", "Lejía"]
    ];

    foreach ($listaCompra as $compra => $tipo){
        echo $compra;
        foreach ($tipo as $item){
            echo " " . $item;
        }
        echo "<br>";
    }


    // Problema 5.4,Calculando el Total del Carrito
    $total = 0;
    foreach ($productos as $producto){
        $total = $total + $producto["precio"];
    }
    echo $total;


?>