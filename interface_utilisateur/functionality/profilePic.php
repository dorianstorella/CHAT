<?php
include 'c:Users/doria/wamp64//www/CHAT/coDB_Login/connBD.php';
session_start();
$id = $_SESSION['id'];
echo $id;
$sql =("SELECT  pic FROM profils where id='$id'")


?>