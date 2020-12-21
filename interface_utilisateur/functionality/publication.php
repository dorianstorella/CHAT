<?php
include 'c:Users/doria/wamp64//www/CHAT/coDB_Login/connBD.php';
session_start();
echo $_SESSION["id"];
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
    //ajouter time et peut etre regarde dans la data base si on a defaut value opu 
    //ou si l erreur viens de justement date time 


    $sql=("INSERT INTO publication(publication,id) VALUES ('$publi','$id')");
    $stmt-> prepare($sql);
    $stmt->execute();
    echo "success";
}
?>

<form action="" method="Post">
<textarea name="publi" id="publi" cols="90" rows="10"></textarea>
<input type="submit" name="submit" id="submit">
</form>