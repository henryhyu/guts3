<?php
   require_once 'login.php'; // Requires login.php

   if (isset($_SESSION['login_user'])) {
       header('location: profile.php'); // The header() function sends a raw HTTP header to a client.
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Login</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id="main">
         <h1>Login Form (created using PHP Sessions)</h1>
         <div id="login">
            <h2>Login Below </h2>
            <form action="" method="post">
               <label>Username :</label>
               <input id="name" name="username" placeholder="username" type="text">
               <label>Password :</label>
               <input id="password" name="password" placeholder="**********" type="password">
               <input name="submit" type="submit" value=" Login! ">
               <span><?php echo $error; ?></span>
            </form>
         </div>
      </div>
      <li class="login-nav__item">
        <a href="register.php">Sign Up</a>
      </li>
   </body>
</html>
