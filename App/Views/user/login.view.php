<?php require "../App/Views/components/auth.navbar.php" ?>

<link rel="stylesheet" href="../Public/CSS/auth.css">


    <div class="card">
        <div class="card-header">    
                <h1>Login</h1>
                </div>
                <div class="card-body">
            <form method="post"?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" value="<?= $_POST["username"] ?? null?>" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" value="<?= $_POST["password"] ?? null?>" id="password" name="password" required>
                </div>

                <button type="submit">Login</button>
                <a href="/user/register"><p>Don't have an account?</p></a> 
            </form>
            <?php
                if (isset($errors) && $errors != []) {
                    foreach ($errors as $error) {
                        echo "<p>$error</p>";
                    }
                }
            ?>
        </div>
    </div>
</div>
