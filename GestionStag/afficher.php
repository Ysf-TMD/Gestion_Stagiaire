<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher_Stag</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include_once('navbar.php');
    require_once('DB.php');
    $sqlstt=$pdo->prepare('SELECT * FROM stagiaire ');
    $sqlstt->execute();

    $nbrstag=$pdo->query('SELECT COUNT(*) AS nombre FROM stagiaire');
    $n=$nbrstag->fetch(PDO::FETCH_OBJ);
    $stag=$sqlstt->fetchAll(PDO::FETCH_OBJ);
  
    ?>
<div class=" col-12  row ">
<span class=" h1 text-center my-3  p-2 ">
  Nombre Totale de votre Stagiaires <?php echo "($n->nombre)"?>
</span>
  <?php foreach ($stag as $stagiaire){ 
     ?>
     
    <div class="card my-5" style="width: 33.33%;">
    
    <img src="./upload/<?php echo  $stagiaire->file?>"  style="height: 300px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title bg-primary rounded border border-light  p-2 w-50" style="box-shadow: 1px 5px 10px black;"><?php echo $stagiaire->nom ,'  ' ; echo   $stagiaire->prenom ?></h5>
      
      <h3 class="card-text">Discription.</h3>
      <h6 class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel dolo
    rem dolore quo iure tempore ipsum dolores eaque nihil. Voluptatum, ab?</h6>
    </div>
  </div>
<?php
}
  ?>
</div>






    
    
    
    <?php include_once('footer.php')?>
</body>
</html>