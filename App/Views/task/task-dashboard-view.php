
<?php require "../App/Views/components/user.navbar.php" ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Public/CSS/dashboard.css">
</head>
<body>
<br>
<br>
<br>
<br>
<div class="title-div">
    <h1 id="tasks-title">Tasks</h1>
</div>
<br>
<div class="wrapper">
    <div class="grey-div">
<?php
if (!empty($tasks)) {
    foreach ($tasks as $task) {
        echo '<div class="card">';
        echo '<h2>' . $task['Title'] . '</h2>';
        if ($task['Status'] == 'done') {
            echo '<p class="done">' . $task['Status'] . '</p>';
        } else {
            echo '<p class="not-done">' . $task['Status'] . '</p>';
        }
        echo '</div>';
    }
}
?>
   </div>
</div>
</body>
</html>
