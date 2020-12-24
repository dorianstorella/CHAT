<?php
$db = new PDO('mysql:host=localhost;dbname=combats', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>