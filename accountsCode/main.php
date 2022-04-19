<?php
include './dbConnection.php';

if(!empty($_POST)) {
    $naam = $_POST["naam"];
    $wachtwoord = $_POST["wachtwoord"];

    $sql = "INSERT INTO `users` (naam, wachtwoord) VALUES ('{$naam}, {$wachtwoord}');";

    if ($conn->query($sql) === TRUE) {
        echo "Je bent aangemeld welkom!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>aanmelden</title>
</head>
<body>
    <form action="" method="post">
        <div class="inputContainer">
            <input type="text" name="naam" class="input" placeholder="naam">
            <input type="text" name="wachtwoord" class="input" placeholder="wachtwoord">
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>