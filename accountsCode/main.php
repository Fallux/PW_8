<?php
include './dbConnection.php';

// echo $_SESSION['Sadmin_email'];
// echo $_SESSION['Sadmin_id'];
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
            <div class = "navLinks">
            <a href="./registreren.php">registreren</a>
            <a href="./login.php">login</a>
            <a href="./vraag.php" id="vraag">vraag stellen</a>
            </div>
        </nav>
    </header>
    <main>
        <form id="filterZoek">
            <!--filter container bepaalde soort functie  -->
            <select name="" class="filterBox">
                <option value="firstFilter" placeholder="Ik wil iets doen met..." name="Mijn vraag is voor..">Mijn vraag is voor..</option>
                <option value="ik wil iets doen met" placeholder="Zorg">Zorg</option>
                <option value="ik wil iets doen met" placeholder="Sport">Sport</option>
                <option value="ik wil iets doen met" placeholder="Kunst en Cultuur">Kunst en Cultuur</option>
                <option value="ik wil iets doen met" placeholder="Onderwijs en Educatie">Onderwijs en Educatie</option>
                <option value="ik wil iets doen met" placeholder="Duurzaamheid en Groen.">Duurzaamheid en Groen</option>
                <option value="ik wil iets doen met" placeholder="Overig.">Overig</option>
                <option value="ik wil iets doen met" placeholder="Welzijn">Welzijn</option>
                <option value="ik wil iets doen met" placeholder="Toon alles">Toon alles</option>
            </select>
             <!-- einde filter container bepaalde soort functie  -->
                  <!-- filter container tijdbesteding  -->
            <select name="" class="filterBox">
                <option value="firstFilter" placeholder="Ik wil iets doen met..." name="Mijn vraag is voor..">Mijn vraag is voor..</option>
                <option value="ik wil iets doen met" placeholder="Zorg">Zorg</option>
                <option value="ik wil iets doen met" placeholder="Sport">Sport</option>
                <option value="ik wil iets doen met" placeholder="Kunst en Cultuur">Kunst en Cultuur</option>
                <option value="ik wil iets doen met" placeholder="Onderwijs en Educatie">Onderwijs en Educatie</option>
                <option value="ik wil iets doen met" placeholder="Duurzaamheid en Groen.">Duurzaamheid en Groen</option>
                <option value="ik wil iets doen met" placeholder="Overig.">Overig</option>
                <option value="ik wil iets doen met" placeholder="Welzijn">Welzijn</option>
                <option value="ik wil iets doen met" placeholder="Toon alles">Toon alles</option>
            </select>
                 <!-- einde filter container tijdbesteding  -->
            <input type="submit" value="zoek">
        </form>
        <div class="vraagContainer">
        <h2>Vragen</h2>
        <?php
            $sql = "SELECT id, userID, soortHulp, vraagGebruiker FROM vraag";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='boxInfo'>" . "Naam:" . $row["userID"] . " Soort hulp: " . $row["soortHulp"] . "<br>" . "De vraag: " . $row["vraagGebruiker"] . "</div>";
              }
            } else {
              echo "0 results";
            }
            ?>
        </div>
    </main>
</body>
</html>