<?php
require 'connect.php';

/*$nameErr = $passErr = $emailErr = "";
$username = $password = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST['username']);
  $password = test_input($_POST['password']);
  $email = test_input($_POST['email']);
}

function test_input($data)
  {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  if (empty($_POST['username']))
    {
    $nameErr = "Username is required";
    }
    else
    {
    $name = test_input($_POST['username']);
    }

  if (empty($_POST['password']))
    {
    $passErr = "Password is required";
    }
    else
    {
    $password = test_input($_POST['email']);
    }

  if (empty($_POST['email']))
    {
    $emailErr = "Email is required";
    }
    else
    {
    $email = test_input($_POST['email']);
    }
  } */
 ?>

<html>
<head>
<title>Form</title>
</head>
<body>

<div id="main">
  <h1>Submit data using HTML into a database (using mysqli)</h1>
  <div id="login">
    <h2>Register New User</h2>
    <hr/>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
      <label>Username :</label>
      <input type="text" name="username" id="username" required="required" value="<?php //echo htmlspecialchars($username);?>"/><span class="error">* <?php //echo $nameErr;?></span><br /><br />
      <label>Password :</label>
      <input type="password" name="password" id="password" required="required" value="<?php //echo htmlspecialchars($password);?>"/><span class="error">* <?php //echo $passErr;?></span><br/><br />
      <label>Email :</label>
      <input type="email" name="email" id="email" required="required" value="<?php //echo htmlspecialchars($email);?>"/><span class="error">* <?php //echo $emailErr;?></span><br/><br />
      <input type="submit" value=" Submit " name="submit"/>
      <?php
        if (isset($_GET["submit"])) {
          // process the form contents...
        } ?>
  <br />
    </form>
  </div>
  <li class="login-nav__item">
    <a href="index.php">back</a>
  </li>
</div>

<?php

	// If the values are posted, insert them into the database.

	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
		{
		$sql = "INSERT INTO users(username, password, email) VALUES ('" . $_POST['username'] . "','" . $_POST['password'] . "','" . $_POST['email'] . "')";
		if ($db->query($sql) === true)
			{
			echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
			}
		  else
			{
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . '<br />' . $db->error . "');</script>";
			}

		$db->close();
		}

?>

  </body>
</html>
