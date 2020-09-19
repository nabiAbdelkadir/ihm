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
    <div class="box-search text-center">
      <div class="h3">
        More 7022 Game  free and 1022 game From $2
      </div>

      <div class="search-ajax ">
            <input type="text" class="form-control"  placeholder="search game" id ="search">
          <div class="child-search-ajax">
            <?php // XXX:
                /*
                <ul class="list-unstyled">
                  <li><img src="image/game/dragonball.jpg"> the name </li>
                </ul>created by ajax
                */
             ?>
          </div>
      </div>
    </div>
     <!-- XXX: Start  slider -->

      <section class="choice game">
        <div class="h2">
        <?php // XXX:   List of Games ?>
        </div>
        <div class="row">
          <?php
          include("connect.php");
      //    $name =$_GET['name'];
        //  echo "the name is " .$name ;

            $sql = " SELECT * FROM game";
            $stmt=$conn->Prepare($sql);
            $stmt->execute();
            while($row=$stmt->fetch()){
              $id=$row['id'];
              $name=$row['name'];
              $image=$row['image'];
              $temp_id ="id".$id;
              echo "<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 box-game'>";
              echo "<div class='des ' id =$temp_id>";
              echo '<div class="btn btn-primary">';
              echo "<a href ='play.php?id=$id+&image=$image' class ='gotoplay'><i class='fa fa-gamepad'> Play Now </i></a>";
              echo '</div>';//End btn
              echo '</div>';//End des
              echo "<img src='$image'  id ='$temp_id' alt='image'>";
              echo "</div>";//End col
            }


           ?>


        </div>
      </section>

  </body>
  <script  src="js/jquery-2.1.1.min.js"></script>
  <script  src="js/bootstrap.min.js"></script>
  <script  src="js/main.js"></script>
</html>
<?php


 ?>
 <?php
/*
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 box-game">
  <div class="des text-center" id ="id1">
      <div class="btn btn-primary">
            <i class="fa fa-gamepad"> Play Now </i>
      </div>
  </div>
    <img src="image/game/mario.jpg"  id ="id1" alt="image">
</div>

*/

  ?>
