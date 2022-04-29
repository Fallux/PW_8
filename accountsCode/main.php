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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Home - VrijwilligersHuis Nieuwegein</title>
</head>
<body>
    <header>
        <nav>
            <div class = "navLinks">
            <a href="./registreren.php">registreren</a>
            <a href="./login.php">login</a>
            <a href="vraag.php" id="vraag">vraag stellen</a>
            <a href="contact_V_A.php" id="contact_V_A">Mijn chats</a>
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
        <div id="artikelBox">
        <div class="vacatureContainer">
        <h2>Vacatures</h2>  
            <div class="vacatureBox"></div>
            



        </div>
        <button type="button" class="btn btn-danger meerKnop"><a href="vacature.php">...Meer</a></button>

        <div class="vraagContainer">
            <h2>Vragen</h2>
        <?php
            $sql = "SELECT id, userID, soortHulp, vraagGebruiker, beschrijving FROM vraag";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='boxInfo'>" . "Naam:" . $row["vraagGebruiker"] . " Soort hulp: " . $row["soortHulp"] . "<br>" . "De vraag: " . $row["beschrijving"] . "</div>";
              }
            } else {
              echo "0 results";
            }
            ?>
            <div id="buttonBox">    

                <!-- knop 1 -->
                <div id="b1">     
                <div> Ook ergens hulp bij nodig? Stuur dan jouw hulp vraag in!</div>
                <!-- <button type="button" class="btn btn-danger"><a href="vraag.php">Hulp nodig</a></button> -->

                <button type="button" class="btn btn-danger"><a href="<?php 
                if ($_SESSION['Sadmin_gebruiker'] == 'Hulpzoeker' || $_SESSION['Sadmin_gebruiker'] == 'Hulp-verlener/zoeker'){
                    echo 'vraag.php';
                }else if ($_SESSION['Sadmin_gebruiker'] == ''){
                    echo 'login.php';
                }else if ($_SESSION['Sadmin_gebruiker'] == 'Hulpverlener'){
                    echo 'registreren.php';
                }
                ?>">Hulp zoeken</a></button>
                </div>

                <!-- knop 2 -->
                <div id="b2">
                <div> Hulp aanbieden? Vul hier het formulier in!</div>
                <button type="button" class="btn btn-danger">Hulp aanbieden</button>
                </div>
                
            </div>
        </div>
    </div>
    </main>
    <footer>
        <hr>
        <div class="container">
            <div class="row">
                <!-- 1ste kolom -->
                <div class="col-sm">
                <h4>Contact</h4>
                    <div>Bezoekadres</div>
                    <div>Stadsplein 1</div>
                    <div>3431 LZ Nieuwegeint</div>
                    <br>
                    <div>Maandag en dinsdag</div>
                    <div>10:00 - 16:00</div>
                    <br>
                    <div>Bereikbaar via</div>
                    <div>06 53 97 26 85</div>
                    <div>info@vrijwilligershuis-nieuwegein.nl</div>
                    <br>
                    <div>Maandag t/m vrijdag</div>
                    <div>10:00 - 16:00</div>
                </div>
                <!-- 2de kolom -->
                <div class="col-sm">
                <h4>Informatie</h4>
                <div>Blogs en vlogs</div>
                <div>Contact</div>
                <div>Over ons</div>
                <div>Nieuwsbrieven</div>
                <div>Op zoek naar een MaS stage</div>
                </div>
                <!-- 3rde kolom -->
                <div class="col-sm col3">
                <div>Vrijwilligers account aanmaken</div>
                <div>Organisatie account aanmaken</div>
                <div>Veelgestelde vragen</div>
                <div>Privacy Statement</div>
                <div>Cookieverklaring</div>
                </div>
                <!-- 4rde kolom -->
                <div class="col-sm">
                <iframe src="https://www.facebook.com" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>