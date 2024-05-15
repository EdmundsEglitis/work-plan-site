<link rel="stylesheet" href="../Public/CSS/auth.css">

<div class="card">
    <div class="card-header">
        <h1>Register</h1>
    </div>

    <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" value="<?= $_POST["username"] ?? null?>" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" value="<?= $_POST["email"] ?? null?>" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" value="<?= $_POST["password"] ?? null?>" id="password" name="password" required>
            </div>

            <button type="submit">Register</button>
        </form>

        <?php
            if (isset($errors) && $errors != []) {
                foreach ($errors as $error) {
                    echo "<p class='error'>$error</p>";
                }
            }
        ?>
        <a href="/user/login">Have a account?</a>
    </div>
</div>
