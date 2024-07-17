<?php
 require_once('../config/config.php');

// ceci correspond a la couche modele (ce qui va interagir avec la Bdd)
//on cree une classe 
 class ArticleRepository { 
    //on cree la methode qui va faire les requetes avec la Bdd
    public function findAll() { 

       
    
                $dbConnection= new Dbconnection();
                $pdo = $dbConnection->connect();
                
                // Préparer la requête GET
                
                $stmt = $pdo->query("SELECT * FROM articles");
                
                
                // Exécuter la requête on recupere
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $articles; // ne pas oublier de return pour la recuperation
    }
}   
        
        
        
    

