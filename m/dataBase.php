
<?php

    // Déclarations des constantes
    define("HOST","localhost");  // constante qu'on a besoin de l'host qui sera en local vue qu'on est en local
    define("DB_NAME","siteweb"); // constante qui prend le nom de la db
    define("USER","root"); // constante qui défini l'utilisateur qui va se connecter
    define("PASS",""); // constante qui défini le mot de passe

    // Bloc qui va éssayé d'effectué une action  et si ça ne marche on récupère l'erreur
    try{
        // Déclaration d'une variable de connection
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME,USER,PASS); // PDO représente la connection à la base de donnée
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // setAttribute permet d'afficher les erreurs si il y en a
    } catch(PDOException $e) {
        echo $e;
    }
?>
