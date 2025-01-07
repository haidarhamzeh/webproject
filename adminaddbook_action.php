<?php



$title=$_POST['txttitle'];


$author=$_POST['txtauthor'];
$image=$_POST['txtimage'];


$con=mysqli_connect("localhost","root","","book");
$query="INSERT INTO addbook(db_title,db_author,db_image)
                     VALUES('$title','$author','$image')";

mysqli_query($con,$query) or die (mysqli_error($con));
header("location:adminaddbook.php");
?>