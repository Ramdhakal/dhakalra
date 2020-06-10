<?php
//Get value pass from formin login.php file
session_start();





//TO connect and select database
$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'rd_db');
//prevent mysql injection
if(isset($_POST['login'])){

$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);
if(!$username="" && !$password=""){
//query the database for the user
$q="SELECT * FROM clfa WHERE(username='$username' and password='$password'";
  
   $result=mysqli_query($conn,$q);
  
   	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $num=mysqli_num_rows($result);
      if($num==1){
         $_SESSION['username']==$username;
         header("location:home.php");
      }
      else

      {
         echo"login failed";
      }
   	}
   }
   ?>
  