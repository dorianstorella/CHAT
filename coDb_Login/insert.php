<?php
session_start();
echo $_SESSION['pseudo'];

 
    echo $_SESSION['pseudo'];

?>

<p>Etes vous sur de vouloir vous deconnecter ?</p>
<a href="deco.php">
    <button>oui</button>
</a>
<a href="chat.php">
    <button>non</button>
</a>
