 	
<?php
 
//including the database connection file
include("connection.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($con, "DELETE FROM typingtest WHERE id=$id");
 
//redirecting to the display page (updatedelete.php in our case)
echo "<script> window.location.assign('/upde.php'); </script>";
?>