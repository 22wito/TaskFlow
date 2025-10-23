<?php
function obtenerClasePrioridad($prioridad){
    $taskClasses = "task-item";
    switch ($prioridad) {
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
    return $taskClasses;
}

function renderizarTarea($tarea){
    $taskClasses = obtenerClasePrioridad($tarea["priority"]);
    if ($tarea["completed"]) {
        $taskClasses .= " completed";
    }

    return "<li class='" . $taskClasses . "'>" . $tarea["title"] . "</li>";
    
}




?>