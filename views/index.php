<?php
   require_once '../controllers/login.php'; // Requires login.php

   if (isset($_SESSION['login_user'])) {
       header('location: profile.php'); // The header() function sends a raw HTTP header to a client.
       exit();
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>User Login</title>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
      <link href="css/loginstyle.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="login-container" id="main">
         <div id="login">
            <form action="" class="form-login" method="post">
              <ul class="login-nav">
      					<li class="login-nav__item active">
      						<a href="">Sign In</a>
      					</li>
      					<li class="login-nav__item">
      						<a href="register.php">Sign Up</a>
      					</li>
      				</ul>
               <label for="login-input-user" class="login__label">
                 Username :
               </label>
               <input id="login-input-user" name="username" placeholder="username" type="text" class="login__input">
               <label for="login-input-password" class="login__label">
                 Password :
               </label>
               <input id="login-input-password" name="password" placeholder="**********" type="password" class="login__input">
               <label for="login-sign-up" class="login__label--checkbox">
       					<input id="login-sign-up" type="checkbox" class="login__input--checkbox" />
       					Keep me signed in
       				</label>
              <button name = "submit" type="submit" value="Log In" class="login__submit"> Sign In </button>
              <span><?php if ($error) {echo "<script type= 'text/javascript'>alert('$error');</script>";} ?></span>
            </form>
            <a href="http://www.phpgang.com/how-to-create-forget-password-form-in-php_381.html" class="login__forgot">Forgot Password?</a>
         </div>
      </div>
      <li class="login-nav__item">
        <a href="register.php">Sign Up</a>
      </li>
   </body>
</html>
