<?php
require_once "../app/Models/calendar.php";
require_once "../app/Models/task.php";
$userID = $_SESSION['user']["id"];
$markDone = new taskModel();
$taskModel = new calendarModel();
$calendar = $taskModel->calendarGetTasks($userID);

if (!isset($_SESSION['user']['Username'])) {
    header("Location: /user/login");
    exit(); // It's important to exit after a header redirect to prevent further execution
}
if(isset($_POST["id"])){
    if($_POST["status"] =="not done"){
        $Status="done";
    }else{
        $Status="not done";
    }
    $markDone->done($_POST["id"], $Status);
}



$title = "Calendar";
require_once "../app/Views/task/calendar.view.php";

