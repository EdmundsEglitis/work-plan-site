<?php require "../App/Views/components/user.navbar.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Public/CSS/dashboard.css">
</head>
<body>
    <div class="title-div">
        <h1 id="tasks-title">Tasks:</h1>
    </div>
    <div class="task-list">
        <?php if (!empty($tasks)) : ?>
            <?php foreach ($tasks as $task) : ?>
                <div class="card">
                    <h2><?= $task['Title'] ?></h2>
                    <p class="<?= ($task['Status'] == 'done') ? 'done' : 'not-done' ?>"><?= $task['Status'] ?></p>
                <form method="post" action="/task/show" class="show-form">
                <input type="hidden" name="id" value="<?= $task['id'] ?>">
                <button type="submit" class="show-view-button">View Task</button>
                </form>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>