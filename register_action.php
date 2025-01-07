<?php

$username=$_POST['txtusername'];
$email=$_POST['txtemail'];
$password=$_POST['txtpassword'];




$con=mysqli_connect("localhost","root","","book");
$query="INSERT INTO users(db_username,db_email,db_password)
            VALUES('$username','$email','$password')";
            
mysqli_query($con,$query) or die (mysqli_error($con));
header("location:main.php");

?>