<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ihm";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,
          array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
      echo"<br>" . $e->getMessage();
    }
        //$conn = null;
