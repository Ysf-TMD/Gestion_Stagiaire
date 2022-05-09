<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_Stagiaire</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>
<body class="bg-light" >
    <?php require_once('DB.php');?>
    
    
    <div  style="width:100%; height:50vh;" class="container-fluide">
        <img src="./IMG/Stagiaire.png" width="100%" height="420" style="position:absolute ; box-shadow : 10px 05px 10px gray; " alt="">
    </div>
    <div class="container col-6 my-5">
    <?php include_once('navbar.php');?>
    </div>
    <div class="container">
        <h1 class=" text-center bg-primary w-100 rounded my-5 p-2" style="box-shadow: 1px 5px 15px black;">Espace Stagiaire</h1>
        <div class="container ">
        <div class="card-group">
  <div class="card">
    <img src="./IMG/stagiaire2.png" class="card-img-top" alt="..." style="height: 250px;">
    <div class="card-body">
      <h5 class="card-title ">Consulter Vos collegues</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente eum consequuntur modi aperiam maxime unde alias odit nesciunt quas fuga!</p>
     
    </div>
  </div>
  <div class="card">
    <img src="./IMG/Stagiaire1.png" class="card-img-top" alt="..." style="height: 250px;">
    <div class="card-body">
      <h5 class="card-title  ">Consulter Votre Professeur</h5>
      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad quod suscipit repellat eum rem tempore inventore est ipsum culpa natus?</p>
     
    </div>
  </div>
  <div class="card">
    <img src="./IMG/Stagiaire.png" class="card-img-top" alt="..." style="height: 250px;">
    <div class="card-body">
      <h5 class="card-title">Consulter L'Administration</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum rerum ut libero dicta facilis, animi deleniti hic voluptatibus nesciunt.</p>
     
    </div>
  </div>
  <div class="card">
    <img src="./IMG/emploi.jpg" class="card-img-top" alt="..." style="height: 250px;">
    <div class="card-body">
      <h5 class="card-title">Consulter votre Emploi</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum rerum ut libero dicta facilis, animi deleniti hic voluptatibus nesciunt.</p>
     
    </div>
  </div>
</div>
        </div>
    </div>
<?php
include_once('footer.php')?>
</body>
</html>