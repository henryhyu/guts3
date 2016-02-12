<?php
require '../models/connect.php';
// A session is a way to store information (in variables) to be used across multiple pages.
// Unlike a cookie, the information is not stored on the users computer.
session_start(); // Starts the PHP Session
$error = ''; // Variable to store a potential error message

// isset — Determine if a variable is set and is not NULL
// empty — Determine whether a variable is empty
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = 'The username or password you entered is invalid';
    } else {
        // Define $username and $password into variables (easier to reference)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // To protect against MySQL injections
        //$username = stripslashes($username);
        //$password = stripslashes($password);
        // Escape special characters in a string:
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        // SQL query to fetch information for registered users.
        // mysqli_query performs a query on the database
        $query = mysqli_query($db, "SELECT * FROM users WHERE password='$password' AND username='$username'") or die(mysqli_error($db));
        // mysqli_num_rows returns the number of rows in a result set
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing the Session
            header('location: profile.php'); // Redirect to the logged in page
        } else {
            $error = 'The username or password you entered is invalid';
        }
        mysqli_close($db); // Closes the connection
    }
}
