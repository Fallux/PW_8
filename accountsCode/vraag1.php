<?php
include './dbConnection.php';

if (isset($_POST['submit']) && $_POST['submit'] != '') {
    //default user: test@test.nl
    //default password: test123
    
    $liqry = $conn->prepare("SELECT admin_user_id,email FROM admin_user WHERE password_token = ? LIMIT 1;");
    if($liqry === false) {
       echo mysqli_error($conn);
    } else{
        $liqry->bind_param('s',$token);
        $liqry->bind_result($adminId,$email);
        if($liqry->execute()){
            $liqry->store_result();
            $liqry->fetch();
            if($liqry->num_rows == '1' && $password_1 == $password_2){

                $password = password_hash($password_1, PASSWORD_DEFAULT);
                
                $query1 = $conn->prepare("UPDATE admin_user SET password = ?, password_token = '', password_changed = NOW() WHERE admin_user_id = ? LIMIT 1;");
                if ($query1 === false) {
                    echo mysqli_error($conn);
                }
                
                $query1->bind_param('si',$password,$adminId);
                if ($query1->execute() === false) {
                    echo mysqli_error($conn);
                } 
                $query1->close();
                
                echo "Gelukt, u wordt doorgestuurd... <meta http-equiv=\"refresh\" content=\"2; URL=main.php\">";
                exit();
            } else {
                echo "ERROR tijdens verzenden. Komen de wachtwoorden overeen?";
            }
        }
        $liqry->close();
    }
}

if(!empty($_POST)) {
    $vraagNaam = $_POST["vraagNaam"];
    $soortHulp = $_POST["soortHulp"];
    $beschrijving = $_POST["beschrijving"];
    $userID = $_SESSION['Sadmin_id'];

    $sql = "INSERT INTO `vraag` (id, userID, vraagGebruiker, soortHulp, beschrijving) VALUES (null, '{$userID}', '{$vraagNaam}', '{$soortHulp}', '{$beschrijving}');";

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