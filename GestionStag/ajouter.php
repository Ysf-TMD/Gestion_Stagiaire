<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
include_once('navbar.php');
    require_once('DB.php');
if (isset($_POST['ajouter'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $img='';
    $file=$_FILES['file'];
    $imgname=$file['name'];
    $fichier=basename($imgname);
    $name=time().'-'.$fichier; 
    $dossier='upload/';
  
    if(!empty($fichier )){
        move_uploaded_file($file['tmp_name'],$dossier.$name);
    }
    if(!empty($nom)&& !empty($prenom)&& !empty($age)&& !empty($file)){
            $sqlState=$pdo->prepare("INSERT INTO stagiaire VALUES(null,?,?,?,?)");
            $sqlState->execute([$nom,$prenom,$age,$name]);
        }





  
}
?>

    <div class="container my-5 w-50">
    <div  style="box-shadow: 1px 0px 20px black;" class="card">
    <img src="./IMG/formulaire.jpg" style="height: 500px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ajouter Votre Stagaire</h5>      
    </div>

  </div>
        <h1 style="box-shadow: 1px 5px 16px black;" class=" border border-primary border-3 text-center my-3 bg-primary text-light p-3 rounded">Remplissez Votre Formulaire</h1>
    <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label class="form-label">file</label>
            <input type="file" class="form-control" name="file">
        </div>

        <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
    </form>
    </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>