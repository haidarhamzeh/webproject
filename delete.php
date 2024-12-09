<?php

include 'inc/connection.php';
$artID=$_GET['ID'];
$sql="DELETE FROM books WHERE id='$artID'";
mysqli_query($con,$sql);
header("location:managebooks.php");


?>