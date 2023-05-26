<?php include "connexion.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<form action="Ajouter.php" method="post" class="form-group">
<table>
    <tr>
        <td>Nom : </td>
        <td><input class="form-control" type="text" name="nom"></td>
    </tr>
    <tr>
        <td>Prix : </td>
        <td><input class="form-control" type="number" name="prix"></td>
    </tr>

    <tr>
        <td>Catégorie</td>
        <td><input class="form-control" type="text" name="categorie"></td>
    </tr>
    
    <tr>
        <td>Quantité</td>
        <td>  <input class="form-control" type="number" name="quantite"></td>
    </tr>

    <tr>
        <td>Photo</td>
        <td><input class="form-control" type="file" name="photo"></td>
    </tr>
    
    <tr>
        <td><input class="btn btn-dark" type="submit" value="show" name="show"></td>
        <td> <input class="btn btn-primary" type="submit" value="Add" name="OK"></td>
    </tr>
</table>
</form>

</body>
</html>

<?php

if(isset($_POST['OK'])){
$nom= $_POST['nom'];
$prix= $_POST['prix'];
$cat= $_POST['categorie'];
$q= $_POST['quantite'];
$ph= $_POST['photo'];

$sql= "INSERT INTO produits (nom, prix, categorie, quantite, photo)
VALUES ('$nom', '$prix', '$cat', '$q', '$ph')";

$res = $connexion -> query($sql);

if($res) {
 header ("Location: index.php");
}
else{
    echo "<script> alert('Erreur d'ajout')</script>";

}
}

if(isset($_POST['show'])){
    echo "<h1> Hello World !!</h1>";
}
