<?php require ("Connexion.php");

function allArgonautes(){
    $link = Connexion::connect();
    $query = $link->query("SELECT * FROM argonautes");
    if ($query){
        $argonautes = $query->fetchAll();
            ?>
                <table class="table table-striped my-3">
                    <tbody>
                        <?php foreach ($argonautes as $argonaute):?> 
                            <tr class= "row">
                                <td class="col-2"></td>
                                <td class="col-8 pl-3"><?=$argonaute["nom"]?></td>
                                <td class="col-2 text-right pl-2">
                                    <a href="/Entity/Delete.php?id=<?=$argonaute["id"]?>" class="trash">
                                        <img  src="assets/img/trash.png" alt="delate">
                                    </a>
                                </td>                                
                            </tr>                        
                        <?php endforeach;?>                       
                    </tbody>
                </table>
               <?php
            
    }
}    
    
