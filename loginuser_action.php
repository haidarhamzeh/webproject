<?php
session_start();

include 'inc/connection.php';
$Email=$_POST['txtemail'];
$Password=$_POST['txtpassword'];


$sql="SELECT * FROM users WHERE db_email='$Email' AND db_password='$Password'";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
$SESSION['user']=$Email;
    header("location:main.php");
}
else{
    header("location:loginuser.php?error=1");

}

?>
