<?php
//including the database connection file
include("../db_conn.php");
 
$id=$_GET['id'];
 $sql = "DELETE FROM `daroods` WHERE id = '$id'";
//deleting the row from table
mysqli_query($conn, $sql);
 
//redirecting to the display page (index.php in our case)
header("Location:adminDurood.php");

?>