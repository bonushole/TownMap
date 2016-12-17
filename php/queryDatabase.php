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

$sql ="SELECT * FROM houses WHERE status=1;";

$result = $conn->query($sql);

//$json = $result->fetch_assoc();

//$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);

while ($row = $result->fetch_assoc()) {
  $json[] = $row;
}
//echo json_encode(array($row["address"]));
//$dummy = array("this","that");
 echo json_encode($json);
//echo json_encode($dummy);

$conn->close();

?>