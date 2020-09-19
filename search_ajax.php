<?php
include("connect.php");
  $name =$_GET['name'];
  //$name =$_GET['name'];
  $sql = " SELECT * FROM game WHERE name like '%".$name."%' LIMIT 5";
  $stmt=$conn->Prepare($sql);
  $stmt->execute();
  $temp ="<ul class ='list-unstyled'>";
  while($row=$stmt->fetch()){
    $id =$row['id'];
    $name=$row['name'];
    $image=$row['image'];
    $temp.="<a href ='play.php?id=$id+&image=$image' style ='text-decoration: none'><li><img src='$image'> $name </li></a>";
  }//End while
  $temp.="</ul>";
  echo $temp;
