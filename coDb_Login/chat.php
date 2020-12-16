<?php
session_start();
//echo $_SESSION['mdp'];
$email = $_SESSION['email'];
setcookie("email", "$email", time() + 10*24*3600, null, null, false, true);
echo $_COOKIE['email'];

$mdp = $_SESSION['mdp'];
setcookie("mdp", "$mdp", time() + 10*24*3600, null, null, false, true);
echo $_COOKIE['mdp'];
//echo $_SESSION['pseudo'];
//echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenus <?php echo  $_SESSION['pseudo'];?></h1>
    
    <form method="Post" action="insert.php">
       <input type="submit" value="deconnexion"/>
    </form>
</body>
</html>