<!-- copy rihgt 2021 powerd by turkDevloper -->

<?php
    include_once 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>note</title>
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

         <!--   notes menu    -->
<?php

if (isset($_GET['note']) and  !empty($_GET['note'])) {
    $noteAdress =  $_GET['note'] ;
    header("Location: notepage.php?note=$noteAdress") ;
}

   $query = "SELECT title FROM `notes` ORDER BY `id`  DESC" ;
    $date  = $connection->query($query) ;
    
  while($row = $date->fetch_assoc()){

    echo  '<a href="?note='.$row['title'].'">' ;
    echo  '<div class="title">' ;
	echo  '<h3>'.$row['title'].'</h3>';
    echo  '</div>';
    echo  '</a>'  ;
  }
  // copy right 2021 powerd by taymaz mostafaei
?>
         <!--   note add buttom    -->

	<a href="newNote.php">
	<div class="pluse">
		<botten>+</botten>
	</div>
    </a>

   </div> 
</body>
</html>