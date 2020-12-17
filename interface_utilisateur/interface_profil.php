<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="container-fluid col-10">
    <header class="container-fluid mb-5 btn-primary btn">
    <div class="row">
    <img href="" alt="couverture" class="col-12"> 
    <img href="" alt="photo de profil" class="col-12">
    
    <h1> <?php echo $_SESSION['pseudo']; echo $_SESSION['id']; ?></h1>
    </div>
    </header>
    
    <section class="container-fluid mb-5 " id="intro">
    <div class="row ">
    <div class="col-1"></div>
    <!--    INFORMATION      -->
    <ul class="list-group bg-light col-6">
    <li class="list-goup-item">nom/prenom :</li>
    <li class="list-goup-item">date de naissance :</li>
    <li class="list-goup-item">hobbie :</li>
    </ul>
    <ul class="list-group bg-light col-4">
    <li class="list-goup-item">addresse mail:</li>
    <li class="list-goup-item">ecole/taff :</li>
    <li class="list-goup-item">valeur :</li>
    </ul>
    </div>
    <!--          END            -->
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
    <div class="col-4"></div>
    <div class="col-5 ">
    <div class="card" style="width: 19rem; height: 20rem;">
    <div class="card-body">
    <h5 class="card-title">publication</h5>
    <p class="card-text" id="message"> hello j essaie de faire mon premier profil avec phpmyadmin php</p>
    
     </div>
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