<?php



$name=$_POST['txtname'];


$phonenumber=$_POST['txtphonenumber'];

$con=mysqli_connect("localhost","root","","book");
$query="INSERT INTO giveaway(db_name,db_phonenumber)
                     VALUES('$name','$phonenumber')";

mysqli_query($con,$query) or die (mysqli_error($con));
header("location:main.php");
?>