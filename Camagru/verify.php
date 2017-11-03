<?php
session_start();
include_once './functions/verify.php';
?>
<!DOCTYPE html>
<HTML>
  <header>
    <meta charset="UTF-8">
    <title>Camagru - VERIFY</title>
  </header>
  <body>
    <?php include('fragments/header.php') ?>
    <?php include('fragments/footer.php') ?>
    <div id="login">
    <div class="title">VERIFY</div>
    <?php if (verify($_GET["token"]) == 0) { ?>
      <strong>
        Your account as been verified
      </strong>
    <?php } else { ?>
      <strong>
        Account not found
      </strong>
    <?php } ?>
    </div>
  </body>
</HTML>
