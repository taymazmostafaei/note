<?php
 
 $connection = new mysqli('localhost','root','','notebook') ;

 if ($connection->connect_errno) {
     die($connection->connect_error) ;
 }
 
 
?>