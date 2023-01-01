<?php

    session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css" >
    <title>EZ-Tattoo</title>
</head>
<body>
    <header>
        <nav>
            <a href="v/login.php"> Connection</a>
            <a href="v/signin.php"> S'inscrire </a>
            <a href="v/contact.php"> Contact </a>
        </nav>
    </header>
    
    <?php
        include 'm/dataBase.php'
    ?>

    <main>

        <h1>Bienvenu sur EZ-Tattoo</h1>

        <p> 
            EZ-Tattoo est un site pour faciliter le contact avec les clients passionnée de tattouage et les proffessionnel.
            Ce site va vous aider à prendre vos rendez-vous,être en contact avec votre tatoeur préféré, à pouvoir discuter de vos projet de tattouage,ect.
            Pour profiter pleinement de nos service c'est simple il suffit de cliqué sur le boutton s'inscrire ou alors via ce <a href="v/signin.php"> raccourcie</a>

        </p>

    </main>

    <footer>
        <p>
            site en cours d'éssaie
            <br>
            pour plus d'information rediriger vous vers <a href="v/contact.php"> nos contact</a>
        </p>
    </footer>
   

   


</body>
</html>