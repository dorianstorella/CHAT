<?php 
include 'connBD.php';
    
if (isset($_POST['NouvNom']))
{   
    $nom=$_POST["NouvNom"];   
    $email=$_POST["NouvEmail"];
    $mdp=$_POST["mdp"];
    $pass_hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $sql ="INSERT INTO  utilisateurs (pseudo, email, mdp)  VALUES ('$nom','$email','$pass_hash')";
    $stmt =$db->prepare($sql);
    $stmt->execute();
    header('location: Login.php');
}
?>
<h2>creer vous une session</h2>
<!--formulaire pour demander une session-->
<form action="" method="POST">

<label for="NouvNom">quel est ton pseudo ?</label>
<input type="text" name="NouvNom" id="NouvNom">

<label for="NouvEmail">quel est ton email ?</label>
<input type="email" name="NouvEmail" id="NouvEmail">

<label for="mdp">choisis ton mdp </label>
<input type="password" name="mdp">

<input type="submit" name="nouvSubmit">
</form>

