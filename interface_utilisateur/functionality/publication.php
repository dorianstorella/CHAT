<?php
include 'c:Users/doria/wamp64//www/CHAT/coDB_Login/connBD.php';
//session_start();
//echo $_SESSION["id"];
$id=$_SESSION["id"];
$sql = ("SELECT id from publication where id='$id'");

$stmt=$db->prepare($sql);
$stmt->execute();

$result = $stmt->fetch();

/*if ($result=null);
{
    echo "hey";
    $sql =("INSERT  INTO publication (id) VALUES ('$id')");

    $stmt = $db->prepare($sql);
    $stmt->execute();
};*/
if (isset($_POST['publi']))
{
    $publi=$_POST['publi'];
    //ajouter time et peut etre regarde dans la data base si on a defaut value ou 
    //ou si l erreur viens de justement date time AAAA-MM-JJ HH:MM:SS


    $sql=("INSERT INTO publication(publication,id,msg_MHM) VALUES ('$publi','$id')");
    $stmt = $db -> prepare($sql);
    $stmt->execute();
    echo "success";
};

$sql = ("SELECT publication, (msg_MHM) from publication where id='$id'");
$stmt = $db -> prepare($sql);
$stmt->execute();

$result = $stmt -> fetch();
//echo $result['publication'];
$_SESSION['publication']=$result['publication'];
$_SESSION['msg_MHM']=$result['msg_MHM'];
echo $_SESSION['msg_MHM'];
//ajouter une limit desc pour ajouter plusieur publication
?>

<form action="" method="Post">
<textarea name="publi" id="publi" cols="60" rows="10"></textarea>
<input type="submit" name="submit" id="submit">
</form>