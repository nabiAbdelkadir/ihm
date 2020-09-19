<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nabi abdelkadir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">

  </head>
  <body>
  <?php include("sing.php") ?>
  <?php include("navbar.php"); ?>
  <?php
      $id =$_GET["id"];
      $image =$_GET["image"];
   ?>
    <section class ="play container">
      <div class="wrapper-play">
          <i class ="fa fa-gamepad fa-5x"></i>
      </div>
      <div class="">
          <img src="<?php echo $image; ?>" alt="">
      </div>
    </section>

  </body>
  <script  src="js/jquery-2.1.1.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/main.js"></script>
</html>
<style media="screen">
  .play{
    margin-top: 10px;
    margin-bottom: 20px;
    height: 100%;
    position: relative;
    background: blue;
    padding: 0;
  }
  .play img {
    width: 100%;
    height:600px;

  }
  .play .wrapper-play{
    position: absolute;
    background:rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 2;
    display :flex ;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 35px;

  }
  .play .wrapper-play i{
    cursor: pointer;
    opacity: 0;
    transition: all .6s ease-in-out ;
  }
  .play .wrapper-play:hover i{
    opacity: 1;
  }
</style>
