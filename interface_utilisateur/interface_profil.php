<?php

session_start();

//echo $_SESSION['pic'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="container-fluid  col-10">
    <header>
    <div class="row mb-5 btn-warning">
    <div class="col-1"></div>   
    <img src="<?php echo $_SESSION['pic']?>" alt="photo de profil" class="mb-5 col-4">
    <div class="col-1"></div>
    <div class="col-5">
    <h1 class="col-6  mb-5"> <?php echo $_SESSION['pseudo']; ?></h1>
    
    <!--    INFORMATION      -->
    <ul class="list-group bg-light  ">
    <li class="list-goup-item col-12">nom/prenom : <?php echo $_SESSION['nom']?></li>
    <li class="list-goup-item">date de naissance :<?php echo $_SESSION['anniv']?></li>
    
    </ul>
    <ul class="list-group bg-light ">
    <li class="list-goup-item">addresse mail:<?php echo $_SESSION['email']?></li>
    <li class="list-goup-item">Metier :<?php echo $_SESSION['job']?></li>
    </ul>
    <form action="functionality/info.php">
    <input type="submit" value="mettre a jour vos info">
    </form>
    </div>
    </div>
    </header>
    <!--          END            -->
    </section>
    <section>
  
    <div class="btn col-12">
    <div class="card btn">
    <div class="card-body">
    <h5 class="card-title">derniere publication</h5>
    <p class="card-text" id="message"> <?php echo $_SESSION['publication'] . $_SESSION['msg_MHM'] ?></p>
    </div>
    </section>

    
    <section class="container-fluid mb-5" id="amis">
    <div class="row">
   
    <ul class="list-group bg-light btn col-3">  
    <p>amis</p>
    <li class="list-goup-item">tom</li>
    <li class="list-goup-item">martin</li>
    <li class="list-goup-item">jean</li>
    <li class="list-goup-item">pilou</li>
    <button>voir plus</button>
    </ul>
    </div>

    </div>
    </div>
    </section>
    <!--      AFFICHER AMIS     -->



    <!--          END           -->
    </section>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>