<?php
//session 
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
//connection established
$con = mysqli_connect('localhost','root');
//selecting database
mysqli_select_db($con,'logindb');
//query
$q="select * from user where username='$username' && password='$password'";
//to execute
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/login/home.php');
}
else
{
	header("location:http://localhost/login/login.php");
}


?>