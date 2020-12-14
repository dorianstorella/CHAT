<?php
$email=" "; 
$person="dorian";
setcookie('pseudo' , "$person" , time() + 10 *24*3600, null, null, false, true);
setcookie("email" , "$email" , time() + 10 *24 *3600, null, null, false, true);
echo $_COOKIE['pseudo'];
session_start();

$_SESSION['Prenom']="dorian";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello <?php echo $_COOKIE['pseudo']?></p>

<!--formulaire de connexion et ou demander une session
<form action=""></form>

</body>
</html>