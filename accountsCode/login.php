<?php
include './dbConnection.php';

if (isset($_POST['submit']) && $_POST['submit'] != '') {
    //default user: test@test.nl
    //default password: test123
    $email = $conn->real_escape_string($_POST['email']);
    $wachtwoord_post = $conn->real_escape_string($_POST['wachtwoord']);
    
    $liqry = $conn->prepare("SELECT id,email,wachtwoord,userType,naam FROM users WHERE email = ? LIMIT 1;");
    if($liqry === false) {
        trigger_error(mysqli_error($conn));
    } else{
        $liqry->bind_param('s',$email);
        $liqry->bind_result($id,$email,$wachtwoord,$gebruiker,$naam);
        if($liqry->execute()){
            $liqry->store_result();
            $liqry->fetch();
            if($liqry->num_rows == '1' && password_verify($wachtwoord_post, $wachtwoord)){
                $_SESSION['Sadmin_id'] = $id;
                $_SESSION['Sadmin_naam'] = $naam;
                $_SESSION['Sadmin_gebruiker'] = $gebruiker;
                $_SESSION['Sadmin_email'] = stripslashes($email);
                echo "Bezig met inloggen... <meta http-equiv=\"refresh\" content=\"1; URL=main.php\">";
                exit();
            } else {
                echo "ERROR tijdens inloggen";
            }
        }
        $liqry->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <a href="main.php">terug</a>
    <div class="inputContainer">
        <form action="" method="post">
            <input type="text" name="email" class="input" placeholder="Email" required>
            <input type="password" name="wachtwoord" class="input" placeholder="Wachtwoord" required>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>