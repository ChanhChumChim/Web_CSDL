<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <title>Trang Quản Trị CLA</title>

      <link rel="stylesheet" type="text/css" href="css/admin_style.css">
   </head>
   <?php
      session_start();
      if(!isset($_SESSION['dangnhap'])) {
         header('Location:login.php');
      }
   ?>
<body>
    <h3 class="title_admin">Administrator Page</h3>
    <div class="wrapper">
    <?php
      include("config/config.php");
      include("modules/header.php");
      include("modules/menu.php");
      include("modules/main.php");
      include("modules/footer.php");
    ?>
    </div>
</body>
</html>