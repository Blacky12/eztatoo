<?php

    if(isset($_POST['formlogin'])){
        extract($_POST);

        if (!empty($lemail) && !empty($lpassword)) {

            $q = $db -> prepare("SELECT * FROM users WHERE email =:email");
            $q->execute(['email'=> $lemail]);
            // fetch permet de retourner un résultat en un tableaux
            $result = $q->fetch();

            if($result == true){
                //le compte existe bien
                $hashPassword = $result['password'];
                if(password_verify($lpassword, $hashPassword)){
                    echo "Bienvenu " . $lemail . " vous êtes bien connecté";

                    // _SESSION récupère les variable sous forme de clef assembler à leur valeur (un peu comme un dictionnaire)
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['date'] = $result['date'];


                }else{
                    echo "Le mot de passe n'est pas correcte";
                }
            }else {
                // le compte n'existe pas
                echo "Le compte portant l'email " . $lemail . " n'existe pas";
            }


        }else {
            echo "Veuillez compléter les champs";
        }
    }

?>