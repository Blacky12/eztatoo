<?php session_start();
include "../c/csignin.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>

   
    <h1>Formulaire d'inscription</h1>
    <form method="post" action="../c/csignin.php">
        <label>Entrée votre nom:</label><br>
        <input type="text" name="lastname" id="lastnametname" placeholder="Votre nom" required><br>
        <label>Entrée votre prénom:</label><br>
        <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" required><br>
        <label>Entrée votre date de naissance:</label><br>
        <input type="date" name="date" id="date" placeholder="Date de naissance" required><br>
        <label>Entrée votre e-mail:</label><br>
        <input type="email" name="email" id="email" placeholder="E-mail" required><br>
        <label>Entrée votre mot de passe:</label><br>
        <input type="password" name="password" id="password" placeholder="ex: 8Lettres" required><br>
        <label>Confirmer votre mot de passe:</label><br>
        <input type="password" name="cpassword" id="cpassword" placeholder="********" required><br>
        <input type="submit" name="formsend" id="formsend" value="Signin">
    </form>

    




</body>

</html>