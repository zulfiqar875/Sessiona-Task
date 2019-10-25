<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_technology";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if($conn->connect_error) {
    die("connection failed : " . $conn->error);
}
else
{
    echo "Database Create!!!";
}

?>