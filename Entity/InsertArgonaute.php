<?php

    require_once ("Connexion.php");
    require_once ("Argonaute.php");

    $post = $_POST;
    
    /// verification de la variable nom, envoie de message d'error si vide ou inexistant
        
    if(!(isset( $_POST['name'])) || empty($_POST['name'])):        
        header( "location:/../index.php?erreurs=1");                 
    else: 
        
        $link = Connexion::connect();

        $nom = $_POST['name'];
        
        
        $query = "SELECT * FROM argonautes WHERE nom = '$nom'";
        
        $argonaute = $link->query($query)->fetch();
        if ($argonaute["nom"]):
            
            header( "location:/../index.php?repeated=1&nom=$nom");
        else:
            $newArgonaute = new Argonaute($_POST["name"]);
            $nom = $newArgonaute->getNom();
            // Insert new argonaute in datebase
            $query = $link->query("INSERT INTO argonautes (id, nom) VALUES (NULL, '$nom')");
                    header( "location:/../index.php?success=1&nom=$nom");    
        endif; 
    endif;

    
    
    



    
    

   