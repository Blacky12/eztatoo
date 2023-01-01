<?php
    
    include '../m/dataBase.php';
      // On vérifie si la clef formsend est bien déterminer et est différent que NULL 
      if (isset($_POST['formsend'])) {
        // Extraire $_POST permet d'éviter d'écrire à chaque fois des $_POST["clef"], mais simplement $key
        extract($_POST);
        // La fonction preg_match va retourer 1 si l'élément recherché dans la chaine de caractère s'y trouve 0 dans le cas contraire
        $upper = preg_match('/[A-Z]/', $password); //Uppercase Letter
        $lower = preg_match('/[a-z]/', $password); //Lowercase Letter
        $dig = preg_match('/\d/', $password); //numéral
        // On vérifie que tout les champs sont remplies ;
        if (!empty($lastname) && !empty($firstname) && !empty($date) && !empty($email) && !empty($password) && !empty($cpassword)) {
            // On vérifie si on à le même mot de passe;
            if ($password == $cpassword) { // double vérification pour le mdp si c'est bien le même qu'il a taper
    
                $options = [
                    'cost' => 12,
                ];
                $hashPass = password_hash($password, PASSWORD_BCRYPT, $options);

                $c= $db -> prepare("SELECT email FROM users WHERE email = :email");
                $c -> execute([
                    'email' => $email
                ]);

                $result = $c -> rowCount(); // rowCont permet de compter le nombre des résultat au niveau des résultat retourne

                if($result == 0) {
                    // On créer une variable $q pour préparer une requête (! faire une fonction prepare() et non query pour éviter les fails dans notre site)
                    $q = $db -> prepare("INSERT INTO users(lastname,firstname,email,password) VALUES(:lastname,:firstname,:email,:password)");
                    $q -> execute([
                        'lastname' => $lastname,
                        'firstname' => $firstname,
                        'email' => $email,
                        'password' => $hashPass
                ]);
                echo "Le compte à bien été crée";
                }else {
                    echo "Un e-mail existe déjà";
                }
                // // On vérifie les recommandations du mot de passe;
                // if (strlen($password) >= 8 && $upper && $lower && $dig) {
                    
                //     // on le redirige vers la page de connection;
                //     header("location:login.php");
                // }else{
                //     echo ("Oups votre mdp dois composer une majuscule , une minuscule et un chiffre :)");
                // }
            }
        }
    }


?>