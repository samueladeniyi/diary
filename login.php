<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if($_GET['logout']==1) {session_destroy();
$message = "you have been logged out";
}

/*
if(!isset($_SESSION['id'])){
  header('Location: index.php');
  exit;
} 
*/

include('config.php');

if($_POST['submit']=='signup'){
  if(!$_POST['email']) $error.="<br>enter email";
  else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br>enter a valid mail";
  
  if(!$_POST['password']) $error.="<br>enter password";
  else {
    if(strlen($_POST['password'])<8) $error.="<br>at 8 char";
    if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br>at least 1 cap letter";

  }
  if($error) 
$error =  "there was an error".$error;
else {


$query="SELECT * FROM `employee` WHERE email='".mysqli_real_escape_string($con,$_POST['email'])."'";
 
$result=mysqli_query($con, $query);

$results=mysqli_num_rows($result);

if ($results) $error .= "user exists";
else {
  $query= "INSERT INTO employee (email,password) VALUES('".mysqli_real_escape_string($con, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";

  mysqli_query($con, $query);

echo "success";
$_SESSION['id'] = mysqli_insert_id($con);
header("Location:mainpage.php");
}
}
} 


if(isset($_POST['login'])){
$query = "SELECT * FROM employee WHERE email='".mysqli_real_escape_string($con,$_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
if($row){
  $_SESSION['id'] = $row['id'];
  header("Location:mainpage.php");
} 
else {
  $error = "<br>incorrect login";
  
}
}

?>