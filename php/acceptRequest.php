<?php

$servername = "max000000.db.10570502.hostedresource.com";
$username = "max000000";
$password = "Blue78TigerMarble%";
$dbname = "max000000";
    
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
    echo json_encode("something went wrong");
} 

$sql ="SELECT * FROM requests WHERE id=". $_GET['id'] .";";

$result = $conn->query($sql);
$row = $result->fetch_assoc()

$sql ="DELETE FROM requests WHERE id=". $_GET['id'] .";";
$conn->query($sql);

$sql ="INSERT INTO houses VALUES(0,".$row.address.",1)";
$conn->close();

?>