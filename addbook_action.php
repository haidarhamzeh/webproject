<?php



$title=$_POST['txttitle'];


$author=$_POST['txtauthor'];
$phoneNumber=$_POST['txtphone'];

$con=mysqli_connect("localhost","root","","book");
$query="INSERT INTO books(db_title,db_author,db_phoneNumber)
                     VALUES('$title','$author','$phoneNumber')";

mysqli_query($con,$query) or die (mysqli_error($con));
header("location:addbook.php");
?>