<?php include "connexion.php";

$id= $_GET['id'];
$sql="delete from produits where id= $id ";
$resultat= $connexion-> query($sql);

if($resultat){
    header('Location: index.php');
}