
<div>
    <div >
        <div >
            <h1 >Register</h1>
        </div>

        <form  method="post">
            <div >
                <label for="username" >Username:</label>
                <input type="text" value="<?= $_POST["username"] ?? null?>" id="username" name="username" required >
                <!-- Added border class -->
            </div>

            <div >
                <label for="email" >Email:</label>
                <input type="email" value="<?= $_POST["email"] ?? null?>" id="email" name="email" required >
                <!-- Added border class -->
            </div>

            <div >
                <label for="password" >Password:</label>
                <input type="password" value="<?= $_POST["password"] ?? null?>"  id="password" name="password" required >
                <!-- Added border class -->
            </div>

            <button type="submit" >Register</button>
        </form>

        <?php
            if (isset($errors) && $errors != []) {
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
            }
        ?>
        <a href="/user/login"><p>Have a account?</p></a>
    </div>
</div>
