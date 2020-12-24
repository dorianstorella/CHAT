<?php 
$user="root";
$pass="";
try 
{
    $db = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

/*
class User
{
  private $user="root";
  private $pass="";
  private $db;

  public function __construct()
  {
    $this->db = new PDO("mysql:host=localhost;dbname=chat;charset=utf8",$this->user,$this->pass);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "reussis";
  }
}*/
?>