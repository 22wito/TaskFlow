<?php
    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio";
    $userName = "Hugo Lozano Gallardo";
    $userAge = 19;
    $isPremiumUser = true;
    $tasks = [
        ["title" => "Comprar víveres", "completed" => false, "priority" => "alta"],
        ["title" => "Lavar el coche", "completed" => true, "priority" => "media"],
        ["title" => "Estudiar PHP", "completed" => false, "priority" => "baja"],
        ["title" => "Hacer ejercicio", "completed" => true, "priority" => "alta"],
        ["title" => "Leer un libro", "completed" => false, "priority" => "baja"],
    ];
    require_once "../app/functions.php";
    include "../app/views/header.php";
?>

    <h2>Tareas Pendientes</h2>
    <ul>
        <?php
            foreach ($tasks as $task) {
                
                echo renderizarTarea($task);
            }
        ?>
    </ul>

<?php
    include "../app/views/footer.php";
?>