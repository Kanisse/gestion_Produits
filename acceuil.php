<?php session_start(); ?>
<?php include "connexion.php";?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>index</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="bootstrap.min.css">  
</head>

  <body>
    <?php echo "Bienvenue ".$_SESSION['login']."<br>";  ?>
<a href="deconnexion.php">Se déconncter</a>
<?php  
$sql= "select * from produits";
$resultat = $connexion -> query($sql);
?>

<a href="Ajouter.php" class="btn btn-primary">Ajouter</a>
<table class="table">
    <tr>
        <th>nom</th>
        <th>prix</th>
        <th>categorie</th>
        <th>quatite</th>
        <th>photo</th>
    </tr>
<?php while($ligne = $resultat -> fetch_array()){ ?>
    <tr>
        <td> <?php echo $ligne['nom'] ;?>  </td>
        <td><?php echo $ligne['prix'] ;?> </td>
        <td> <?php echo $ligne['categorie'] ;?> </td>
        <td><?php echo $ligne['quantite'] ;?>  </td>
        <td> <?php echo '<img width="60px" height="60px" src= "'.$ligne['photo'].'" >' ?> </td>
        <td> <?php echo '<a class= "btn btn-danger" href="delete.php?id='.$ligne['id'].'">supprimer</a>'?> </td>
    <td> <button class="btn btn-warning"> modifier</button></td>
    </tr>
    <?php
}
?>
</table>

  </body>
</html>