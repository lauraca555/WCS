<?php
class Connexion{
    public static function connect(){
        /* Connexion à une base MySQL avec l'invocation de pilote */
        $dsn = 'mysql:dbname=WSC;host=localhost';
        $user = 'Jason';
        $password = '515AC';
    
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();die;
        } 
        
        return $pdo;  

    }



    
// Conexion à la base de donnée et rêquetes
/*    
$pdo = Connexion::connect();
$query = $pdo->query("SELECT * FROM jeux");
if ($query){
    $users = $query->fetchAll();}
var_dump($users);   */ 


} 