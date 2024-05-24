<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['title'], $_POST['deadline'], $_POST['status'])) {
    require_once "../app/Models/task.php";
    $taskModel = new taskModel();

        $userID = $_SESSION['user']["id"];
        
        $title = $_POST['title'];
        $deadline = $_POST['deadline'];
        $status = $_POST['status'];
        

        $result = $taskModel->createTask($userID, $title, $deadline, $status);
        header("Location: /task/dashboard");
}

    
?>
