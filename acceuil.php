<?php session_start(); ?>
<?php include "connexion.php";?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>index</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css"> 
  <?php 
  $theme = $_SESSION['theme'];
  echo '<link rel="stylesheet" href="'.$theme.'">' ?>
</head>

<header>
    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Produits</a></li>
        <li><a href="#">Contact</a></li>
        <li class="login"><a href="#"><img src="login-icon.png" alt="Connexion"></a></li>
      </ul>
    </nav>
  </header>
  

  <body>
    <?php echo "Bienvenue ".$_SESSION['login']."<br>";  ?>
<a href="deconnexion.php">Se déconncter</a>
<?php  
$id = $_SESSION['id'];
$sql= "select * from produits where id_user=$id";
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