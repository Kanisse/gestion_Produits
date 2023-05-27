
<?php include "connexion.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>home</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
<link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <?php  
$sql= "select * from produits";
$resultat = $connexion -> query($sql);
?>

  <body>
        <h1>Page Acceuil  </h1>
        <?php while($ligne = $resultat -> fetch_array()){ ?>
        <div class="card text-left">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Body</p>
          </div>
        </div>
        <?php }?>
  </body>
</html>