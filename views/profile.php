<?php
   require_once '../controllers/session.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Member's Only Page!</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id="profile">
         <b id="welcome">Welcome home: <i><?php echo $login_session; ?></i></b>
         <b id="logout"><a href="../controllers/logout.php">Log Out</a></b>
      </div>

      <div id="main">
  			<h3>Sexy page</h3>
  			<p><b>User Information</b></p>
  			<table>
  				<tr>
  					<td>User ID: </td>
  					<td><?php echo $row['ID']; ?></td>
  				</tr>

  				<tr>
  					<td>Username: </td>
  					<td><?php echo $row['username']; ?></td>
  				</tr>

  				<tr>
  					<td>Email: </td>
  					<td><?php echo $row['email']; ?></td>
  				</tr>

  				<tr>
  					<td>Cool: </td>
  					<td><?php echo "cool text right here"; ?></td>
  				</tr>

   </body>
</html>
