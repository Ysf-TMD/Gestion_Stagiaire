<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modif</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
        if(!isset($_POST['id'])){
            header('location: tableau.php');
        }
        require_once 'DB.php';
        include_once 'navbar.php';
        $id = $_POST['id'];
        $sqlState = $pdo->prepare('SELECT * FROM stagiaire WHERE id=?');
        $sqlState->execute([$id]);
        $p=$sqlState->fetch(PDO::FETCH_OBJ);
       
        
        if(isset($_POST['modif'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $id = $_POST['id'];
            if(!empty($id) && !empty($nom)&& !empty($prenom)&& !empty($age)){
                $sqlState=$pdo->prepare('UPDATE stagiaire SET nom=? , prenom=? , age=? WHERE id=?');
                $s=$sqlState->execute([$nom,$prenom,$age,$id]);
                if($s==true){
                header('location:tableau.php');
                }
                
            }else{
                echo ('Modif echoué')
                ?>
                
                <?php
            }
        }
    ?>
        
        
    
     <div class="container">
        <h1> Modifier Votre formulaire </h1>
    <form method="POST" action="modifier.php" >
    <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value="<?php echo $p->id?>">
        </div>
    <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" value='<?php echo $p->prenom?>'>
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" value="<?php echo $p->nom ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age" value="<?php echo $p->age?>">
        </div>

        <button type="submit" class="btn btn-primary" name="modif">Modifier</button>
        <?php include_once('footer.php')?>
    </form>
</body>
</html>