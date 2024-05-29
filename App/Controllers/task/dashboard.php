<?php
$title = "dashboard";

require_once "../App/Models/task.php";
require_once "../App/Models/user.php";

    $loggedInUser = $_SESSION['user'];


        
        $userModel = new userModel();
        $taskModel = new taskModel();

            $tasks = $taskModel->getAllTasksByUser($loggedInUser['id']);

        require "../App/Views/task/task-dashboard-view.php";



?>