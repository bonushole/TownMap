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

$sql ="SELECT address FROM houses;";

$result = $conn->query($sql);

//$row = $result->fetch_assoc();

$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
echo json_encode($json);

//echo json_encode(array($row["address"]));
//$dummy = array("this","that");
 
//echo json_encode($dummy);

$conn->close();

?>