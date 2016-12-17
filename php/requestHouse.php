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

$sql = $conn->prepare("INSERT INTO requests VALUES (0,?,?,?);");

$address = $_GET['address'];
$reason = $_GET['reason'];
$name = $_GET['name'];

$sql->bind_param("sss", $address, $reason, $name);

$sql->execute();

$sql->close();

$conn->close();


?>