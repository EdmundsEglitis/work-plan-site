<?php
if(!isset($_SESSION["user"])){
    header("Location: /user/login");
}
else{
$title = "show";

require_once "../App/Models/task.php";
    $taskId = $_POST['id'];
    
    $taskModel = new taskModel();
    $task = $taskModel->getTaskById($taskId);
    
        require "../App/Views/task/task-show-view.php";
}
?>