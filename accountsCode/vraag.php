<?php
include './dbConnection.php';
session_start();

if(!empty($_POST)) {
    if (isset($_SESSION['vraagGebruiker']) && $_SESSION['userID']) {
        # code...
    
    //$vraagNaam = $_SESSION['Sadmin_naam']; & $userID = $_SESSION['Sadmin_id']; heb ik zitten testen
    $vraagNaam = $_SESSION['vraagGebruiker'];
    // $vraagNaam = $_SESSION['Sadmin_naam'];
    $soortHulp = $_POST["soortHulp"];
    $beschrijving = $_POST["beschrijving"];
    $userID = $_SESSION['userID'];
    // $userID = $_SESSION['Sadmin_id'];
   

    $sql = "INSERT INTO `vraag` (id, userID, vraagGebruiker, soortHulp, beschrijving) VALUES (null, '{$userID}', '{$vraagNaam}', '{$soortHulp}', '{$beschrijving}');";

    if ($conn->query($sql) === TRUE) {
        header('Location: main.php');
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
    <title>vraag</title>
</head>
<body>
    <a href="main.php">main</a>
    <h2>Stel hier je vraag</h2>
    <form action="" method="post">
    <div class="inputContainer">
            <select class="soortHulp" name="soortHulp" required>
              <option value="Zorg">Zorg</option>
              <option value="Sport">Sport</option>
              <option value="Kunst en Cultuur">Kunst en Cultuur</option>
            <textarea name="beschrijving" id="input" placeholder="Beschrijving" required></textarea>
            <input type="submit" value="submit" name="submit">
    </div>
    </form>
</body>
</html>
<!-- <?php
}
?> -->