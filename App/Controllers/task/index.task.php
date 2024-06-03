<?php



if(!isset($_SESSION["user"])){
    header("Location: /user/login");
}
else{
$title = "task";

require_once "../App/Models/task.php";

if (isset($_SESSION['user'])) {
    $loggedInUser = $_SESSION['user'];

    if (isset($loggedInUser['Username'])) {
        $username = $loggedInUser['Username'];
        
        
        require "../App/Views/task/task-create-view.php";
    }
}}

?>


