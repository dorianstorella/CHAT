<?php
include 'c:Users/doria/wamp64//www/CHAT/coDB_Login/connBD.php';
//session_start();
$id = $_SESSION['id'];
echo $id;
if (isset($_POST['anniv']))
{   
    $birthday = $_POST['anniv'];
    $Fname_Lname = $_POST['nom'];
    
    $job = $_POST['job'];

    $sql=("UPDATE utilisateurs SET  anniv='$birthday', job='$job', nom='$Fname_Lname' where id='$id'");
    $stmt= $db->prepare($sql);
    $stmt->execute();
    echo"success";
    
    $sql = ("SELECT email, anniv, job,nom from utilisateurs where id='$id'");
    $stmt =$db->prepare($sql);
    $stmt ->execute();

    $result = $stmt->fetch();
    echo $result['anniv'];
    $_SESSION['anniv']= $result['anniv'];
    $_SESSION['job']=$result['job'];
    $_SESSION['nom']=$result['nom'];
}



?>


<form action="" method="Post">

<label for="anniv">anniv</label>
<input type="text" name="anniv" id="anniv" value="2000-01-01">

<label for="nom">nom</label>
<input type="text" name="nom" id="nom">

<label for="job">job</label>
<input type="text" name="job" id="job">


<input type="submit" name="submit" value="mettre a jour vos info">
</form>





