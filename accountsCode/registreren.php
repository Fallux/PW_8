<?php
include './dbConnection.php';


if(!empty($_POST)) {
    $naam = $_POST["naam"];
    $wachtwoord = password_hash($_POST["wachtwoord"], PASSWORD_DEFAULT);
    $email = $_POST["email"];
    $plaats = $_POST["plaats"];
    $postcode = $_POST["postcode"];
    $userType = $_POST["userType"];

    $sql = "INSERT INTO `users`(`id`, `naam`, `wachtwoord`, `email`, `plaats`, `postcode`, `userType`) VALUES (null,'{$naam}','{$wachtwoord}','{$email}','{$plaats}','{$postcode}', '{$userType}');";

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
            <input type="text" name="naam" class="input" placeholder="Naam" required>
            <input type="password" name="wachtwoord" class="input" placeholder="Wachtwoord" required>
            <input type="email" name="email" class="input" placeholder="Email" required>
            <input type="text" name="plaats" class="input" placeholder="Adres" required>
            <input type="text" name="postcode" class="input" placeholder="Postcode" required>
            <label for="userType" class="input">Wil je een hulpverlener of hulpzoeker zijn?</label>
            <select class="userType" name="userType" required>
            <option value="Hulpverlener">Hulpverlener</option>
            <option value="Hulpzoeker">Hulpzoeker</option>
            <option value="Hulp-verlener/zoeker">Hulp-verlener/zoeker</option>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>