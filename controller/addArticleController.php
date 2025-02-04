<?php
require_once("../config/config.php");
require_once("../model/ArticleRepository.php");

// j instancie ma classe
class AddArticleController {

// je cree ma methode 
    public function addArticle (){
            $isRequestOk=false;

            // je fais un var dump pour recup de maniere simulée une fois qu on a affichage on passe a la suite
            // var_dump( value: 'ajouter article');


            // je me connecte a la Bdd -> Model
            // $dbConnection = new DbConnection();
            // $pdo = $dbConnection->connect();

            //je prepare les valeurs pour l'INSERT -> Controller
            // on verifie si  c est bien la methode POST
            if ($_SERVER["REQUEST_METHOD"]==='POST') {  // si oui on recupere les donneées

            $title = $_POST['title'];
            $content = $_POST['content'];
            $dateNow = new DateTime();
            $date = $dateNow->format('Y-m-d') ; // bien penser a rentrer format "Y-M-D"  ici


            $articleRepository = new ArticleRepository;
            $isRequestOk=$articleRepository->insert($title,$content,$date); // on oublie pas de passer en param 

            
        } 

            // j'appelle ma View dans mon Controller 
            // j'affiche les donneés
            
            
            // on remplace le require_once('../templates/page/addArticleView.php');
            $loader = new \Twig\Loader\FilesystemLoader('../templates'); //apres avoir chargé Twig il attend le chemin vers tous les templates, voici ou sont passés mes fichiers twig
            $twig = new \Twig\Environment($loader); // on crée objet twig
        
            echo $twig->render('page/addArticleView.html.twig', ['isRequestOk'=>$isRequestOk]);
            
    }
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

    public function showArticle (){ 
      
        // on recupere l'id passé dans l url de la requete
        $id = $_GET['id'];
        //on instancie le repository pour acceder aux methodes de BDD
        $articleRepository = new ArticleRepository();
        //on appelle la methode
        $article = $articleRepository->findOneById($id); // je recupere en fonction de l'id 
    
        // on remplace le require_once('../templates/page/showArticleView.php');
        $loader = new \Twig\Loader\FilesystemLoader('../templates'); //apres avoir chargé Twig il attend le chemin vers tous les templates, voici ou sont passés mes fichiers twig
        $twig = new \Twig\Environment($loader); // on crée objet twig
    
        echo $twig->render('page/showArticleView.html.twig', ['article'=>$article]); // si dans le fichier twig on appelle toto alors ici ca sera toto egalement ['toto'=>$article]
     
       
    }

    public function deleteArticle () { 
        // je recupere l'id à supprimer
        $id = $_GET['id'];
        //on instancie le repository pour acceder aux methodes de BDD, le controller fait appel au repository pour supprimer des données stocker dans la BDD
        $articleRepository = new ArticleRepository();
        //on appelle la methode pour supprimer 
        $article = $articleRepository->deleteById($id); 

        //je ramene a ma page d accueil apres avoir supprimer l article, au prealable on aura affiché un message de suppression dans le deleteArticleView
        header("Location: http://localhost/piscine-Blog/public");

        // $loader = new \Twig\Loader\FilesystemLoader('../templates'); //apres avoir chargé Twig il attend le chemin vers tous les templates, voici ou sont passés mes fichiers twig
        // $twig = new \Twig\Environment($loader); // on crée objet twig
    
        // echo $twig->render('page/deleteArticleView.html.twig', ['article'=>$article]);
     
       
        //pas besoin de require vu qu on a une redirection
        
      
    }
 

}

//on instancie la classe avec new 
// on appelle la methode
// $addArticleController=new AddArticleController;
// $addArticleController->showArticle();