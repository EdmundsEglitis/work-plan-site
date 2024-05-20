<?php
$title = "task";

require_once "../app/Models/task.php";

if (isset($_SESSION['user'])) {
    $loggedInUser = $_SESSION['user'];

    if (isset($loggedInUser['Username'])) {
        $username = $loggedInUser['Username'];
        
        // Pārsūtiet projektus uz skatu
        require "../app/Views/task/task-create-view.php";
    }
}

?>


