<?Php
session_start();
?>
<!DOCTYPE html>
	<html>
 		<header>
            <link rel="stylesheet" type="text/css" href="style/index.css">
    		<meta charset="UTF-8">
			<title>SIGNUP</title>
    	</header>
    	<body>
        	<?php include('fragements/header.php') ?>
            <?php include('fragements/footer.php') ?>
            <div id="login">
            	<div class="title">SIGNUP</div>
                <div id="black">
                 	<form method="post" style="position: relative;" action="forms/signup.php">
                    	<label>Email: </label>
						<input id="mail" name="email" placeholder="email" type="mail">
						<label>Username: </label>
						<input id="name" name="username" placeholder="username" type="text">
                        <label>Password: </label>
                        <input id="password" name="password" placeholder="password" type="password">
                        <input name="submit" type="submit" value=" SEND ">
                        <span>
                            <?php
                            echo $_SESSION['error'];
                            $_SESSION['error'] = null;
                            if(isset($_SESSION['signup_success'])) {
                                echo "signup success please check your mail box";
                                $_SESSION['signup_success'] = null;
                            }
                            ?>
                        </span>
                    </form>
                </div>
            </div>
        </body>
    </html>
