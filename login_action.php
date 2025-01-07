<?php
session_start();

include 'inc/connection.php';
$email=$_POST['txtemail'];
$password=$_POST['txtpassword'];


$sql="SELECT * FROM members WHERE db_email='$email' AND db_password='$password'";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
$SESSION['user']=$email;
    header("location:admin.html");
}
else{
    header("location:login.php?error=1");

}

?>
