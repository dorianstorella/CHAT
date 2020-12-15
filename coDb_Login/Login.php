<?php

session_start();
include 'connBD.php';
if (isset($_POST['email']))
{   
    $email=$_POST['email'];
    $sql = $db -> prepare("SELECT email , mdp FROM utiliseteurs where email='$email'");
    $stmt = $db->prepare($sql);
    $stmt -> execute();

    $result = $stmt->fetch();

    $verifypass = password_verify($_POST['mdp'],$result['pass']); 
}

    if (!$result)
    {

    }                                                        /*$_SESSION['email']=$_POST["email"];
                                                            $_SESSION['mdp']=$_POST["mdp"];
                                                            */

    header('location: chat.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
    36
    jeanbon
    marcello@yahoo.com
    123456
-->


<h2>connecter vous!</h2>

<form action="">

<label for="email">votre email?</label>
<input type="text" name="email">

<label for="nom">Quel est votre mdp ?</label>
<input type="text" name="mdp">
<input type="submit" name="submit">
</form>


</body>
</html>