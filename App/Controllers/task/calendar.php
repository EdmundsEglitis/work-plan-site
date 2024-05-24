<?php
require_once "../app/Models/calendar.php";

$taskModel = new calendarModel();
$calendar = $taskModel->calendarGetTasks();

if (!isset($_SESSION['user']['Username'])) {
    header("Location: /user/login");
    exit(); // It's important to exit after a header redirect to prevent further execution
}

$title = "Calendar";
require_once "../app/Views/task/calendar.view.php";

