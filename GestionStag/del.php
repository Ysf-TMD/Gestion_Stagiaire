<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del </title>
</head>
<body>
<?php 
if(isset($_POST['del'])){
    require_once('DB.php');
    $id = $_POST['id'];
        $sqlState = $pdo->prepare('DELETE FROM stagiaire WHERE id=?');
        $sqlState->execute([$id]);
        header('Location: tableau.php');

}
?>
</body>
</html>