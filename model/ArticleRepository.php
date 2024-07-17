<?php
 require_once('../config/config.php');

// ceci correspond a la couche modele (ce qui va interagir avec la Bdd)
//on cree une classe 
 class ArticleRepository { 
           // Refacto pour se connecter à la Bdd 
    private $pdo; 

    public function __construct() { 

        $dbConnection= new Dbconnection();
        $this->pdo = $dbConnection->connect();

    } 
    //on cree la methode qui va faire les requetes avec la Bdd
    public function findAll() { 

                
                // Préparer la requête GET
                
                $stmt = $this->pdo->query("SELECT * FROM articles");
                
                
                // Exécuter la requête on recupere
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $articles; // ne pas oublier de return pour la recuperation
    }

    public function insert($title,$content,$date) { 

      
          
            // Préparer la requête d'insertion
            // on prepare ce que l on va executer plus loin, on prepare donc ici la requete d'insertion avant d'executer 

            $sql = "INSERT INTO articles (title, content, created_at) VALUES (:title, :content, :created_at)"; //avec VALUES on evite quelqu un rentre du sql
            $stmt =$this->pdo->prepare($sql);

            // Définir les paramètres et exécuter
            // on definit les parametres

            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':created_at', $date);
        
            // Exécuter la requête pour affichage ici dans modele mais plus tard -> View 

            // on cree un booleen qu on retourne pour voir si True ou pas
            $isRequestOk =$stmt->execute();
            return  $isRequestOk;

            // if ($stmt->execute()) {
            //     echo "Nouvel article ajouté avec succès";
            // } else {
            //     echo "Erreur lors de l'ajout du produit";
            // }

            // on va afficher dans addArticleView
            } 


    }
      
        
        
    

