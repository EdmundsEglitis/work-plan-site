<?php require "../App/Views/components/user.navbar.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Public/CSS/show.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
</head>
<body>
<div class="card">
    <h2><?= $task['Title'] ?></h2>
    <p class="<?= ($task['Status'] == 'done') ? 'done' : 'not-done' ?>"><?= $task['Status'] ?></p>
</div>
</body>
</html>
