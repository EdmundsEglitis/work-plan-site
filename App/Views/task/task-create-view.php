<?php require "../App/Views/components/user.navbar.php" ?>

<link rel="stylesheet" href="../Public/CSS/create.css">

<div>
    <h1>Task List</h1>

    <form action="/task/create" method="POST">
        <div>

            <input type="text" name="title" placeholder="Enter Task Title">

            <input type="date" name="deadline" >


            <select name="status" >
                <option value="done">Pabeigts</option>
                <option value="not done" selected>Nepabeigts</option>
            </select>
            <button type="submit" >Create Task</button>
        </div>
    </form>

</div>
