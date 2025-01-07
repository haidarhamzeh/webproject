<?php

$Type=$_POST['txttype'];
$con=mysqli_connect("localhost","root","","book");
$query="INSERT INTO booktype(type_name)
            VALUES('$Type')";
            
mysqli_query($con,$query) or die (mysqli_error($con));
header("location:type.php");

?>