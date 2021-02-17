<?php
 
 include_once 'dbcon.php' ;
 if (isset($_GET['note']) and !empty($_GET['note'])) {
	$note = $_GET['note'] ;
	$query = "SELECT `text`,`id` FROM `notes` WHERE title= '$note'" ;
	   $date  = $connection->query($query) ;
	  $row = $date->fetch_assoc();
 }
 if(isset($_POST['noteName']) and !empty($_POST['noteName'])){
    $title = $_POST['noteName'] ;
    $text = $_POST['text'] ;
    $id = $row['id'] ;
    $query2 = "UPDATE `notes` SET `title` = '$title' , `text` = '$text'  WHERE `notes`.`id` = '$id' " ;
    $result = $connection->query($query2) ;
    header("location:notepage.php?note=$title&save=true") ;
 }

?>
<!DOCTYPE html>
<html lang="an">
<head>
	<meta charset="utf-8">
	<title><?php echo $note ?></title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
   <div class="main">
       <?php
       if (isset($_GET['save'])) {
           echo '<div class="salert"> <h3>your note saved successful</h3> </div>' ;
       }
       ?>

    <form action="notepage.php" method="post">
	<input class="box" value="<?php echo @$note ; ?>" name="noteName">
		<div>
	 <textarea class="box2" name="text"> <?php echo @$row['text'] ;?></textarea>
		</div>
   <input type="submit" value="save" id="saver">
    </form>
    <a href="index.php"><button class="btn btn1" id="aa">back</button></a>  
	<div class="container">

       

   </div>
  </div>
</body>
</html>