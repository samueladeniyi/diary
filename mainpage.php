<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
include("config.php");

if(!isset($_SESSION['id'])){
  header('Location: index.php');
  exit;
} 

$query = "SELECT diary FROM employee where id='".$_SESSION['id']."' LIMIT 1";

$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$diary = $row['diary'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>secrets</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
     
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
      <a class="navbar-brand" href="index.php?logout=1"><img src="./img/diary.jpg" height=30 width=30>Secret Diary</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
           
          </li>
          
      
                </ul>
               <a href="index.php?logout=1">
                  Log Out</a>
              
              </div>
            </nav>
<div class="bg-img2" style="margin-top=50px;">
<div class="container" >
<textarea class="form-control" style="height:85vh;width:82vw;"><?php echo $diary; ?></textarea>
</div>

</div>

 <script src="https://code.jquery.com/jquery-1.11.0.js"></script> 

<script>


  
$("textarea").keyup(function(){
$.post("updatediary.php",{diary:$("textarea").val()});  
});

</script>  
     </body>
</html>
