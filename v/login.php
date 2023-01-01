<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection en cours...</title>
</head>
<body>
   
    <h1>Formulaire de connection</h1>
    <form method="post" action="../c/clogin.php">
        <label>Veuillez entrée votre e-mail:</label><br>
        <input type="email" name="lemail" id="lemail" placeholder="E-mail" required><br>
        <label>Veuillez entrée votre mot de passe:</label><br>
        <input type="password" name="lpassword" id="lpassword" placeholder="Votre mot de passe:" required><br>
        <input type="submit" name="formlogin" id="formlogin" value="Login">
    </form>

    <?php
        include '../c/clogin.php'
    ?>

    
</body>
</html>