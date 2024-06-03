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
    <h3><?=$task['description'] ?></h3>
    <p class="<?= ($task['Status'] == 'done') ? 'done' : 'not-done' ?>"><?= $task['Status'] ?></p>

    <form method="post" action="/task/dashboard" class="show-form" onsubmit="return confirmDelete()">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <button type="submit" class="delete">Delete</button>
    </form>
</div>
<script>
function confirmDelete() {
    return confirm('Are you sure you want to delete the task?');
}
</script>
</body>
</html>
