<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

asdads
<?php
if (!empty($tasks)) {
    foreach ($tasks as $task) {
        echo '<div>';
        echo '<h1>' . $task['Title'] . '</h1>';
        echo '<p>' . $task['Status'] . '</p>';
        echo '</div>';
        }} ?>
</body>
</html>