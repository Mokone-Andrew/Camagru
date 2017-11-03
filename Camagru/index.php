<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <header>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <meta charset="UTF-8">
    <title>camagru</title>
    </header>
    <body>
        <?php include('fragments/header.php') ?>
        <?php include('fragments/footer.php') ?>
        <div id="login">
        <div class="title">LOGIN</div>
        <div id="black">
            <?php if(isset($_SESSION['id'])) { ?>
            you are connected as <?php print_r(htmlspecialchars($SESSION['username'])) ?>
            <?php } else { ?>
            <form method="post" style="position: relative;" action="forms/login.php">
                <label>Username: </label>
                <input id="name" name="username" placeholder="username" type="text">
                <label>Password: </label>
                <input id="mail" name="password" placeholder="passsword" type="password">
                <input name="submit" type="submit" value=" SEND ">
                <a href="signup.php">Register</a><br />
                <a href="forgot.php">Forgot password ?</a>
                <span>
                    <?php
                        if ($_SESSION['error']) {
                            echo $_SESSION['error'];
                        }
                        $_SESSION['error'] = null;
                    ?>
                </span>
            </form>
            <?php } ?>
        </div>
    </div>
    </body>
</html>
