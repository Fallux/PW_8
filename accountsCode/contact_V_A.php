<!-- V = Vrager en A = Aanbieder -->
<?php 

include 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact_V_A.css">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <div class = "navLinks">
            <a href="./registreren.php">registreren</a>
            <a href="./login.php">login</a>
            <a href="./vraag.php" id="vraag">vraag stellen</a>
            </div>
        </nav>
    </header>
  <!--chat formulier -->
  <a href="main.php">home</a>
<form method="post" action="chatUpdate.php">
  <textarea name="input" id="" cols="30" rows="10"></textarea>
  <input type="submit" value="Send">

</form>
<!-- chat formulier -->
<!--  chatDisplay-->
<iframe src="chatDisplay.php" width="450" height="200" scrolling="yes"></iframe>
</body>
</html>