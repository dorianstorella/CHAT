<?php
session_start();
include 'c:Users/doria/wamp64/www/CHAT/interface_utilisateur/functionality/form.php';
include 'c:Users/doria/wamp64/www/CHAT/interface_utilisateur/functionality/Info.php';
//include 'c:Users/doria/wamp64/www/CHAT/coDb_Login/connBD.php';

//$conn=New Connexion("localhost", "root" ,"" ,"chat");

$info=New Form;
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
<body class="container-fluid  col-11">
    <header>
    <div class="row mb-5 btn-warning">
     <div class="col-5"> 
    <img src="<?php echo $_SESSION['pic']?>" alt="photo de profil" class=" mb-1 col-12 ">
    <button type="button" class=" btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    modifier ta photo 
    </button>
    </div>
    
   
    <div class="col-1"></div>
    <div class="col-5">
    <h1 class="col-12 btn btn-danger mb-5"> <?php echo $_SESSION['pseudo']; ?></h1>
    
    <!--    INFORMATION      -->
    <ul class="list-group bg-light  ">
    <li class="list-goup-item col-12">nom/prenom : <?php echo $_SESSION['nom']?></li>
    <li class="list-goup-item">date de naissance :<?php echo $_SESSION['anniv']?></li>
    
    </ul>
    <ul class="list-group bg-light ">
    <li class="list-goup-item">addresse mail:<?php echo $_SESSION['email']?></li>
    <li class="list-goup-item">Role :<?php echo $_SESSION['job']?></li>
    </ul>
    
    
    <!--peut etre rassembler tout bouton-->
    

<button type="button" class=" btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
    modifiez info
    </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
     <?php  
     
     $info->mrof("", "Post");
     $info->label("anniv");
     $info->input("text", "anniv", "2000-01-01");
     
     $info->label("nom");
     $info->input("nom", "nom", "psuedo");
     
     $info->label("job");
     $info->input("text", "job", "status");
     
     $info->input("submit", "submit", "submit")
     ?>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
    </header>
    <!--          END            -->
    
    
    <section>
  
    
<!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PIC url</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php 
         
            include 'c:Users/doria/wamp64//www/CHAT/interface_utilisateur/functionality/profilePic.php';
        ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>
</div>
<div class="col-11">
    <div class="card btn">
    <div class="card-body">
    <h5 class="card-title">derniere publication du: <?php echo  $_SESSION['msg_MHM']; ?></h5>
    <p class="card-text" id="message"> <?php echo $_SESSION['publication']  ?></p>
</div>
</div>
   
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  ajouter publication
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">publication</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <?php  include 'c:Users/doria/wamp64//www/CHAT/interface_utilisateur/functionality/publication.php';?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</div>

    </section>

    
    <section class="container-fluid mb-5" id="amis">
    <div class="row">
   
    <ul class="list-group bg-light btn col-3">  
    <p>collegue</p>
    <li class="list-goup-item">tom</li>
    <li class="list-goup-item">martin</li>
    <li class="list-goup-item">jean</li>
    <li class="list-goup-item">pilou</li>
    <button>voir plus</button>
    </ul>
    </div>

    
    
    </section>
    <!--      AFFICHER AMIS     -->
    
  

    <!--          END           -->
  
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>