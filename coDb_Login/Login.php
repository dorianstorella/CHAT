<?php


include 'connBD.php';
if (isset($_POST['email']))
{   
    $email=$_POST['email'];
    $sql = ("SELECT pseudo, email, mdp FROM utilisateurs where email='$email'");
    $stmt = $db->prepare($sql);
    $stmt -> execute();

    $result = $stmt->fetch();
   print_r ($result);
    $verifypass = password_verify($_POST['mdp'],$result['mdp']); 


    if (!$result)
    {
        echo 'mauvais pass';
    }                                                   /*$_SESSION['email']=$_POST["email"];
                                                        $_SESSION['mdp']=$_POST["mdp"];*/
    else
    {
        if($verifypass)
        {
            session_start();
            $_SESSION['email'] = $result['email'];
            $_SESSION['pseudo'] = $result['pseudo'];
            echo $_SESSION['pseudo'];
            echo 'vous etes connecte';
        }
        else
        {
            echo 'mauvais identifiant';
        }
    }                                                        
}
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

<form action="" method="POST">

<label for="email">votre email?</label>
<input type="text" name="email">

<label for="nom">Quel est votre mdp ?</label>
<input type="text" name="mdp">
<input type="submit" name="submit">
</form>


</body>
</html>