<?php
require_once "../app/Models/calendar.php";
$userID = $_SESSION['user']["id"];
$taskModel = new calendarModel();
$calendar = $taskModel->calendarGetTasks($userID);

if (!isset($_SESSION['user']['Username'])) {
    header("Location: /user/login");
    exit(); // It's important to exit after a header redirect to prevent further execution
}

$title = "Calendar";
require_once "../app/Views/task/calendar.view.php";

