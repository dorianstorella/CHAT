<?php
session_start();
if (isset($_POST['NouvNom']))
{
$_SESSION['pseudo']=$_POST["NouvNom"];
$_SESSION['mdp']=$_POST["mdp"];
}
include 'connBD.php';

    $nom=$_POST["NouvNom"];   
    $email=$_POST["NouvEmail"];
    $mdp=$_POST["mdp"];

    $sql ="INSERT INTO  utilisateurs (pseudo, email, mdp)  VALUES ('$nom','$email','$mdp')";
    $stmt =$db->prepare($sql);
    $stmt->execute();



    header('location: Login.php');
?>