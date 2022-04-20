<?php
include './dbConnection.php';




if(!empty($_POST)) {
    $vraagNaam = $_POST["vraagNaam"];
    $soortHulp = $_POST["soortHulp"];

    $sql = "INSERT INTO `vragen` (vraagGebruiker, soortHulp) VALUES ('{$vraagNaam}', '{$soortHulp}');";

    if ($conn->query($sql) === TRUE) {
        // header('Location: main.php');
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
            <input type="text" name="vraagNaam" class="input" placeholder="VraagNaam">
            <input type="text" name="soortHulp" class="input" placeholder="SoortHulp">
            <input type="submit" value="submit" name="submit">
            <div>
                <?php
                if (isset($_POST['submit'])!='') {
                    echo $_POST['vraagNaam'] . $soortHulp = $_POST["soortHulp"];
                }
                ?>
            
            </div>
        </div>
    </form>
</body>
</html>