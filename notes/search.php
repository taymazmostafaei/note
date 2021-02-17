<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>searching</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
    <!--   search box    -->
    <div id="searchbox">
        <form action="search.php" method="post">
            <input type="text" name="search" placeholder="search...">
            <input type="submit" value="search">
        </form>
    </div>

<?php
$connection = new mysqli('localhost','root','','notebook') ;

if ($connection->connect_errno) {
    die($connection->connect_error) ;
}
if (isset($_GET['note']) and  !empty($_GET['note'])) {
    $noteAdress =  $_GET['note'] ;
    header("Location: notepage.php?note=$noteAdress") ;
}
//---------------------------------search consel-------------------------------
@$titleName = $_POST['search'] ;

  $query = "SELECT `title` FROM `notes` WHERE `title` LIKE '%$titleName%'" ;
  $date = $connection->query($query) ;
   while($row = $date->fetch_assoc()){
      echo  '<a href="?note='.$row['title'].'">' ;
      echo  '<div class="title">' ;
      echo  '<h3>'.$row['title'].'</h3>';
      echo  '</div>';
      echo  '</a>'  ;
   }
//copy rihgt 2021 powred by taymaz mostafaei
?>
</div>
</body>
</html>
