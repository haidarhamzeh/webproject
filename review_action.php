<?php
$name=$_POST['txtname'];
$review=$_POST['txtreview'];
$con=mysqli_connect("localhost","root","","book");
$query="INSERT INTO reviews(db_name,db_review)
            VALUES('$name','$review')";
            
mysqli_query($con,$query) or die (mysqli_error($con));
header("location:main.php");

?>