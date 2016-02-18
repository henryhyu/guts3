<?php
   require_once '../controllers/session.php';
   require_once '../controllers/display_records.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Contact Page!</title>
      <link rel="stylesheet" type="text/css" href="css/profilestyle.css">
   </head>
   <body>
      <div id="particles-js"></div>
      <div id="profile">
         <b id="welcome">Welcome home: <i><?php echo $login_session; ?></i></b>
         <b id="logout"><a href="../controllers/logout.php">Log Out</a></b>
      </div>

      <div id="main">
        <br /><br />
        <br /><br />
  			<h3>Sexy page</h3>
  			<p><b><center>Contact Information</b></center></p>
  			<table><center>
          <?php displayRecords::display($dbConnect->db); ?>
        </center>
      </table>

      <!-- scripts -->
  		<script src="../js/particles.js"></script>
  		<script src="../js/app.js"></script>

   </body>
</html>
