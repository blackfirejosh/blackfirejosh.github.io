<?php require_once("includes/config.php") ?>
<!DOCTYPE html>
<html>
<head>
   <title>Sign In blackfirejoshTube</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/style.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="signInContainer">

     <div class="column">

          <div class="header">
          <img src="assets/images/icons/blackfirejosh2.png" title="blackfirejosh Logo" alt="blackfirejosh Logo">
          <h3>Sign In</h3> 
          <span>to continue to blackfirejoshTube</span>
          </div> 

          <div class="loginForm">

          <form action="SignIn.php">

             <input type="text" name="username" placeholder="Username" required autocomplete="off">
             <input type="password" name="password" placeholder="Password">
             <input type="submit" name="submitButton" value="SIGN IN">

          </form>

          </div>

          <a class="signInMessage"  href="signUp.php">Need an account? Sign up here!</a>

     </div>

</div>


</body>
</html>