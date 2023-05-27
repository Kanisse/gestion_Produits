<?php include "connexion.php";?>
<html>

<head>
    <title> Page de connexion</title>
    <link rel="stylesheet" href="style.css">

</head>

<body><div class="container">
    <form action="index.php" method="post">
      <h2>Connexion</h2>
      <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" id="username" name="login" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="Se connecter" name= "OK">
    </form>
  </div>
</body>
</html>


<?php  

if(isset($_POST['OK'])){
$login = $_POST['login'];
$password= $_POST['password'];

$sql = "select * from utilisateurs";
$result = $connexion -> query ($sql);

while ($ligne = $result -> fetch_array()){
    if ($ligne['login'] == $login && $ligne['mdp'] == md5($password)){
        session_start();
        $_SESSION['login']= $login;
        header('Location: acceuil.php');
    }
    else {
        echo " <script> alert(' login ou mot de passe incorrect ') </script> ";
    }
}
}




?>