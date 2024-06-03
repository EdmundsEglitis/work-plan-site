<?php

if(!isset($_SESSION["user"])){
    header("Location: /user/login");
}
else{
$title = "dashboard";

require_once "../App/Models/task.php";
require_once "../App/Models/user.php";

    $loggedInUser = $_SESSION['user'];


        
        $userModel = new userModel();
        $taskModel = new taskModel();

            $tasks = $taskModel->getAllTasksByUser($loggedInUser['id']);

        require "../App/Views/task/task-dashboard-view.php";
        if(isset($_POST["id"])){
        $taskModel->delete($_POST["id"]);
        header("Location: /task/calendar");
        };
    }
?>