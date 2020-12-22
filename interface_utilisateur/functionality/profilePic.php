<?php
include 'c:Users/doria/wamp64//www/CHAT/coDB_Login/connBD.php';
//session_start();
$id = $_SESSION['id'];
echo $id;
///envoyer pic
if (isset($_POST['pic']))
{   
    $url =$_POST['pic'];
    echo "$url";
    $sql =("UPDATE profils set pic = '$url' where id='$id'");
    $stmt = $db->prepare($sql);
    $stmt -> execute();
    echo "success";

}
//voir pic
$sql = ("SELECT  pic FROM profils where id='$id'");
$stmt = $db->prepare($sql);
$stmt ->execute();

$result =$stmt->fetch();
//echo ($result['pic']);
$_SESSION['pic']=$result['pic'];
//echo $_SESSION['pic'];
?>

<form action="" method="Post">
<label for="pic">modifier photo</label>

<textarea id="pic" name="pic" rows="6" cols="60">
note
</textarea>

<input type="submit" value="Envoyé">
</form>