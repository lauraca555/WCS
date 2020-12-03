<?php
//list of Argonautes
require_once (__DIR__."/Entity/ListArgaunates.php");

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        
        <title>Les Argonautes</title>
    </head>
    <body class="container-fluid d-flex flex-column px-0" >

        <!-- Header section -->
        <header class="py-5">
            <h1 class="text-center">
            <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
            Les Argonautes
            </h1>
        </header>
        
        <!-- Main section -->
        <main class="container col-md-6">
            
            <!-- New member form -->
            <h2 class="my-3  text-center ">Ajouter un(e) Argonaute</h2>
            
            <form class="new-member-form" action="/Entity/InsertArgonaute.php" method="POST">
                
                <div class="form-group">
                    <label for="name">Nom de l&apos;Argonaute</label>
                    <?php 
                    if($_GET["erreurs"]):
                        ?><div class="alert alert-danger" role="alert">
                            Un nom doit être saissi.
                        </div><?php
                    endif;
                    if($_GET["success"]):
                        ?><div class="alert alert-success" role="alert">
                            Maintenant, l'argonaute <strong><?= $_GET["nom"]?></strong> fait partie de l'équipage !
                        </div><?php
                    endif; 
                    if($_GET["repeated"]):
                        ?><div class="alert alert-danger" role="alert">
                            L'argonaute <strong> <?= $_GET["nom"]?> </strong>  fait dejà partie de l'équipage !
                        </div><?php
                    endif; 
                    if($_GET["delete"]):
                        ?><div class="alert alert-success" role="alert">
                            L'argonaute <strong><?= $_GET["nom"]?></strong> ne fait plus partie de l'équipage !
                        </div><?php
                    endif;   
                    ?>
                    
                    <input id="name" name="name" type="text" class="form-control" placeholder="Saisir le non del argonaute." />
                <div>    
                <button type="submit" class="btn btn-primary my-3">Envoyer</button>
                <a href="/index.php" class="btn btn-secondary my-3">Reset</a>
            </form>
            
            <!-- Member list -->

            <div class="container d-flex flex-column text-center">
                <h2 >Membres de l'équipage</h2>
                <section id="liste-argonautes" class="d-flex-md flex-column justify-content-center">
                        <ul class="list-group list-group-flush ">
                            <?php allArgonautes();?>
                        </ul>
                </section>
            </div>
        </main>
        <footer id="footer" class="footer py-2 text-center mt-auto">
            <p class="m-0">Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>
</html>