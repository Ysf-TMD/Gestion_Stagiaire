<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GestionStag</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <?php include_once('navbar.php');
     require_once('DB.php');
     echo '<h1  >Gestion_Table</h1>';
    
    $sqlstt=$pdo -> query('SELECT * FROM stagiaire');
    $stagiaire=$sqlstt->fetchAll(PDO::FETCH_OBJ);
    ?>
    
    <div class="container   w-100 my-3 col-12 bg-light my-5">
    <table class="table">
    
        <thead>
            <tr>
            <th scope="col">Numéro</th>
            <th scope="col">ID</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">traitement</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($stagiaire  as $key=> $val){?>
            <tr>
              
                <td><?= $key?></td>
                <td><?= $val->id ?></td>
                <td><?= $val->prenom?></td>
                <td><?= $val->nom ?></td>
                <td><?= $val->age ?></td>
                
                <td>
                    <form method='POST' >
                        <!-- pour identifier  -->
                        
                        <input type="hidden" name="id" id="" value="<?php echo $val->id?>">
                        <input formaction="del.php" type="submit" value="Supprimer" name="del" class="active btn btn-outline-danger mx-2 text-light w-50" onclick="return confirm('voullez vous supprimer <?php echo $val->prenom ?> ????')">
                        <input formaction="modifier.php" type="submit" value="modifier" name="modifier" class="active btn btn-outline-primary mx-2 text-light w-50 my-3" >
                        
                    </form>
                </td>
            </tr>
            <?php 
            } 
            ?>

            
            
            
        </tbody>
        
</body>
</html>