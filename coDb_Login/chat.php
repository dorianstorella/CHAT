<?php
session_start();


echo $_SESSION['pseudo'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenus <?php echo  $_SESSION['pseudo'];?></h1>

</body>
</html>