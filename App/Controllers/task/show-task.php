<?php
$title = "show";

require_once "../App/Models/task.php";
    $taskId = $_POST['id'];
    
    $taskModel = new taskModel();
    $task = $taskModel->getTaskById($taskId);
    
        require "../App/Views/task/task-show-view.php";

?>