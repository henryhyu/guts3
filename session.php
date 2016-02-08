<?php
require_once 'connect.php';

session_start();// Starts the session

// Storing the Session
$user_check = $_SESSION['login_user'];

// SQL Query To fetch information about the user
$ses_sql = mysqli_query($db, "SELECT * FROM users WHERE username = '$user_check'");
// puts it into an associative array
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
if (!isset($login_session)) {
    mysqli_close($connection); // Close the connection
header('Location: index.php'); // Redirects to the Index Page
}
