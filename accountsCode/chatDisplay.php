<?php 

include 'dbConnection.php';

$sql = "SELECT message FROM chat1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "" . $row["message"] . "<br>";
    }
} else{
    echo "er zijn geen berichten gewisseld";
}
$conn->close();


?>