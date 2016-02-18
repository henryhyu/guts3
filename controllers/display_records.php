<?php
require_once '../models/connect.php';

$dbConnect = new dbConnect();

class displayRecords{
  public static function display($db){
    // global $db (bad)
    $result = mysqli_query($db, "SELECT * FROM users");
    // $row = mysqli_fetch_assoc($ses_sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["ID"]. " - Username: " . $row["username"]. " - Password: " . $row["password"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $db->close();
  }
}

//displayRecords::display($dbConnect->db);
