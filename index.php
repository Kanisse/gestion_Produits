<?php include "connexion.php";?>
<html>

<head>
    <title> Page de connexion</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
<form action="index.php" method= "post">
    <table>
        <tr>
            <td> Login : </td>
            <td> <input type="text" name="login"></td>
        </tr>
        <tr>
            <td>  Mot de passe : </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td> <input type="submit" value="Se connecter" name="OK"> </td>
            <td>  <input type="reset" value="Reset"> </td>
        </tr>
    </table>
  
</form>
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
header('Location: acceuil.php');
    }
    else {
        echo " <script> alert(' login ou mot de passe incorrect ') </script> ";
    }
}
}




?>