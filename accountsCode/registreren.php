<?php
include './dbConnection.php';


if(!empty($_POST)) {
    $naam = $_POST["naam"];
    $wachtwoord = md5($_POST["wachtwoord"]);
    $adres = $_POST["adres"];
    $postcode = $_POST["postcode"];
    $telefoonnummer = $_POST["telefoonnummer"];

    $sql = "INSERT INTO `users` (naam, wachtwoord, adres, postcode, telefoonnummer) VALUES ('{$naam}', '{$wachtwoord}', '{$adres}', '{$postcode}', '{$telefoonnummer}');";

    if ($conn->query($sql) === TRUE) {
        // echo "Je bent aangemeld welkom!";
        header('Location: vraag.php');
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
<h2>Registreer hier</h2>
<body>
    <a href="main.php">terug</a>
    <form action="" method="post">
        <div class="inputContainer">
            <input type="text" name="naam" class="input" placeholder="Naam">
            <input type="text" name="wachtwoord" class="input" placeholder="Wachtwoord">
            <input type="text" name="adres" class="input" placeholder="Adres">
            <input type="text" name="postcode" class="input" placeholder="Postcode">
            <input type="text" name="telefoonnummer" class="input" placeholder="Telefoonnummer">
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>