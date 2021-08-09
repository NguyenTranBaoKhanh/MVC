<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/reset.css" />
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/base.css" />
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/header.css" />
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/home.css" />
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/footer.css" />

  <?php if (strpos($view, 'login') != false || strpos($view, 'register') != false) : ?>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
      body {
        background-color: #f3455a;
      }

      .centered-form {
        margin-top: 100px;
      }

      .centered-form .panel {
        background: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
      }
    </style>

  <?php else : ?>

    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/reset.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/base.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/header.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/home.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>/css/footer.css" />

  <?php endif; ?>



  <!-- <link rel="stylesheet" href="http://localhost:81/MVC/public/css/normalize.css"> -->
</head>

<?php if (strpos($view, 'login') != false || strpos($view, 'register') != false) : ?>

  <?php require_once(VIEW .  $view . ".php") ?>

<?php else : ?>

  <body>

    <div id="toast">
      <div id="img"><b>!</b></div>
      <div id="desc">A notification message..</div>
    </div>

    <p hidden id="documentRoot"><?= DOCUMENT_ROOT ?></p>

    <?php require_once(VIEW . '/share/header.php'); ?>

    <?php require_once(VIEW .  $view . ".php") ?>

    <?php require_once(VIEW . '/share/footer.php'); ?>

    <div class="container-fluid footer__copyright">
      <p>Copyright © 2021 NGUYEN TRAN BAO KHANH</p>
    </div>

    <script src="<?= PUBLIC_URL ?>/js/app.js"></script>
    <script src="<?= PUBLIC_URL ?>/js/slider.js"></script>
    <script src="<?= PUBLIC_URL ?>/js/cart.js"></script>

  </body>

<?php endif; ?>

</html>