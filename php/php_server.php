<?php
//initialize connection
$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbCSGuide";

//check connection
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

if ($con->connection_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection success";
