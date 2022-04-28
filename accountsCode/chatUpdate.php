<?php
include 'dbConnection.php';
$input = $_POST['input'];

$sql = "UPDATE `chat1` SET message = '$input' WHERE id = '1'";

if ($conn->query($sql) === TRUE) {
    header("location: contact_V_A.php");
} else {
    echo "er is een error";
}

$conn->close();

?>