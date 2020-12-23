<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
$_SESSION['username'] = "Nath";




?>




  <div id="wrapper">
<h1>bechat</h1>

    <div class="chat_wrapper">
    <div id="chat"></div>
    <form method="POST" id="messageFrm">
    <textarea name="message" cols="30" rows="10" class="textarea"></textarea>
    </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>