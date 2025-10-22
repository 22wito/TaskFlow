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
    include "../app/views/header.php";

?>

    <h2>Tareas Pendientes</h2>
    <ul>
        <?php
            foreach ($tasks as $task) {
                $taskClasses = "task-item";
                if ($task["completed"]) {
                    $taskClasses .= " completed";
                }
                switch ($task["priority"]) {
                    case "alta":
                        $taskClasses .= " prioridad-alta";
                        break;
                    case "media":
                        $taskClasses .= " prioridad-media";
                        break;
                    case "baja":
                        $taskClasses .= " prioridad-baja";
                        break;
                }

                echo "<li class='" . $taskClasses . "'>" . $task["title"] . "</li>";
            }
        ?>
    </ul>

<?php
    include "../app/views/footer.php";
?>