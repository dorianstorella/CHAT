<?php
include 'connBD.php';

    $nom=$_GET["NouvNom"];   
    $email=$_GET["NouvEmail"];
    $sql ="INSERT INTO  utilisateurs ( pseudo, email)  VALUES ('$nom','$email')";
    $stmt =$db->prepare($sql);
    $stmt->execute();

?>