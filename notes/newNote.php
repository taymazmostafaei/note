<!-- copy rihgt 2021 powerd by turkDevloper -->
<?php
include_once 'dbcon.php' ;
if (isset($_POST['noteName']) and !empty($_POST['noteName'])){
    $title = $_POST['noteName'] ;
    $text = $_POST['text'] ;
    $query = "INSERT INTO `notes`(`id`, `title`, `text`) VALUES (NULL,'$title','$text')" ;
    $date = $connection->query($query);
    header("location:notepage.php?note=$title&save=true");
    // copy right 2021 powerd by taymaz mostafaei
}
?>
<!DOCTYPE html>
<html lang="an">
<head>

    <meta charset="utf-8">
    <title>your note</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="main">
    <form action="newNote.php" method="post">
        <input class="box" value="" name="noteName">
        <div>
            <textarea class="box2" name="text"> </textarea>
        </div>
        <input type="submit" value="save" id="saver">
    </form>
    <div class="container">

       <!-- <a href="<?php //echo $_SERVER['HTTP_REFERER'] ?>"><button class="btn btn1">back</button></a> -->




    </div>
</div>
</body>
</html>
