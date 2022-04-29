<?php
include './dbConnection.php';

echo $_SESSION['Sadmin_email'];
echo $_SESSION['Sadmin_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Nijmegen</title>
</head>
<body>
    <header>
        <nav>
            <a href="./registreren.php">registreren</a>
            <a href="./vraag.php">vraag stellen</a>
            <a href="./login.php">login</a>
        </nav>
    </header>
    <main>
        <div id="filterZoek">
            <!--filter container  -->
          
        </div>
        <div class="boxInfo">
        <?php
            
            ?>
        </div>
    </main>
</body>
</html>