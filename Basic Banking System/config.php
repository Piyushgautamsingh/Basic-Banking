<?php
   // try to conncet to database
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "century_bank";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {  
    echo '<h1>MySQL Server is not connected</h1>';
}

?>