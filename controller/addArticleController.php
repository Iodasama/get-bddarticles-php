<?php
require_once("../config/config.php");
require_once("../model/ArticleRepository.php");

// j instancie ma classe
class AddArticleController {

// je cree ma methode 
    public function addArticle (){

            // je fais un var dump pour recup de maniere simulée une fois qu on a affichage on passe a la suite
            // var_dump( value: 'ajouter article');


            // je me connecte a la Bdd -> Model
            // $dbConnection = new DbConnection();
            // $pdo = $dbConnection->connect();

            //je prepare les valeurs pour l'INSERT -> Controller

            $title ="Mon super article";
            $content="实在太棒了";
            $date="2024-07-17"; // penser a rentrer format "Y-M-D" pour la date on pourra le modifier dans format par la suite


            $articleRepository = new ArticleRepository;
            $articleRepository->insert($title,$content,$date); 
            
            // Préparer la requête d'insertion
            // on prepare ce que l on va executer plus loin, on prepare donc ici la requete d'insertion avant d'executer 
            // -> Model

            // $sql = "INSERT INTO articles (title, content, created_at) VALUES (:title, :content, :created_at)"; //avec VALUES on evite quelqu un rentre du sql
            // $stmt = $pdo->prepare($sql);

            // // Définir les paramètres et exécuter
            // // on definit les parametres

            // $stmt->bindParam(':title', $title);
            // $stmt->bindParam(':content', $content);
            // $stmt->bindParam(':created_at', $date);



    //     // Exécuter la requête -> View

    //     if ($stmt->execute()) {
    //         echo "Nouvel article ajouté avec succès";
    //     } else {
    //         echo "Erreur lors de l'ajout du produit";
    //     }
    // } 
}
}
//on instancie la classe avec new 
// on appelle la methode
$addArticleController=new AddArticleController;
$addArticleController->addArticle();