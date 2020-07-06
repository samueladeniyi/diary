<?php
include('login.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>diary</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./img/diary.jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Galada&family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
    <div class="container">
      
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="./img/diary.jpg" height=30 width=30>Secret Diary</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
      
                </ul>
                <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                
                  <input class="form-control mr-sm-2" type="email" name="loginemail" id="email" value="<?php echo addslashes($_POST['email']); ?>"  > 
                  <input class="form-control mr-sm-2" type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>"  >
                  <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="login" value="log in">Log In</button>
                </form>
              </div>
            </nav>


            <?php
            //display error
            if($error){
              echo '<div class="alert alert-danger" id="err">'.addslashes($error).'</div>';
            }

            if($message){
              echo '<div class="alert alert-success">'.addslashes($message).'</div>';
            }
            ?>
                  
                  <div class="bg-img" >
                  
                  <div class="container">
              <div class="row">
                <div class="col">
                <div class=text1><h1>i <br> <br>can keep<br> <br>a <br> <br>secret</div>
                </div>
                <div class="col">
                <h1>Sign up <br>here</h1>
                <form method="post"
                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <p>Email:<br><input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/> </p>
                  <p>Password:<br><input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>"/></p>
                  <input type="submit" name="submit" value="signup" />
                  </form>
                </div>
              </div>
         
<!-- Footer -->

<footer class="page-footer font-small blue fixed-bottom">


  <div class="footer-copyright text-center py-3"  >
  <span class="fa-stack fa-lg">
  <i class="fa fa-circle-thin fa-stack-2x "></i>
  <a href="https://twitter.com/samueladeniyi" target=_blank><i class="fa fa-twitter fa-stack-1x fa-inverse" style="color:black;"></i></a>
</span>

<span class="fa-stack fa-lg" >
  <i class="fa fa-circle-thin fa-stack-2x"></i>
  <a href="https://github.com/samueladeniyi" target=_blank><i class="fa fa-github fa-stack-1x" style="color:black;"></i></a>
</span>

  </div>


</footer>
<!-- Footer -->
         

                  
</div>
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>