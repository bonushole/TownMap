<?php

$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "snowplow";
    
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
    echo json_encode("something went wrong");
} 

$sql = "UPDATE houses SET status=0 WHERE id =".$_GET['id'];

$conn->query($sql);

$conn->close();

?>