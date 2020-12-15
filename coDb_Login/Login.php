<?php

setcookie('pseudo' , "dorian" , time() + 10 *24*3600, null, null, false, true);
setcookie("email" , "dorianstorella@hotmail.com" , time() + 10 *24 *3600, null, null, false, true);

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


<h2>creer vous une session</h2>
<!--formulaire pour demander une session-->
<form action="insert.php">

<label for="NouvNom">quel est ton pseudo ?</label>
<input type="text" name="NouvNom" id="NouvNom">

<label for="NouvEmail">quel est ton email ?</label>
<input type="email" name="NouvEmail" id="NouvEmail">

<input type="submit" name="nouvSubmit">
</form>

<h2>connecter vous!</h2>
<form action="post">
<label for="nom">Quel est votre nom ?</label>
<input type="text" name="nom">

<label for="email">votre email?</label>
<input type="text" name="email">

<input type="submit" name="submit">
</form>


</body>
</html>