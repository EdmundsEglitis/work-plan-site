<div  >
    <div >    
        <div >
        <div >
            <h1 >Login</h1>
        </div>
            <form  method="post"?>
                <div >
                    <label for="username" >Username</label>
                    <input type="text" value="<?= $_POST["username"] ?? null?>" id="username" name="username" required >
                    <!-- Added border class -->
                </div>

                <div >
                    <label for="password" >Password:</label>
                    <input type="password" value="<?= $_POST["password"] ?? null?>" id="password" name="password" required >
                    <a href="/user/lostPassword"><p >Forgot your password?</p></a>
                    <!-- Added border class -->
                </div>

                <button type="submit" >Login</button>
                <a href="/user/register"><p >Dont have an account?</p></a> 
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