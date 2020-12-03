<?php

    require_once ("Connexion.php");
    require_once ("Argonaute.php");

          
        $link = Connexion::connect();

        $id = $_GET['id'];
        
        //get the argonaute's name before delete
        $query = $link->query("SELECT nom FROM argonautes WHERE id  = '$id'");
        if ($query):
            $argonaute = $query->fetch();
        endif;    
        $nom = $argonaute ["nom"];
        
        // delate argaunate by id
        $query = $link->prepare("DELETE FROM argonautes WHERE id = :id");
        $query -> bindParam("id", $id);
        $query -> execute();

       
        
        header( "location:/../index.php?delete=1&nom=$nom");
        
        

    
    
    



    
    

   