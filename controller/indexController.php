<?php
 require_once('../config/config.php');
 require_once('../model/ArticleRepository.php');
// ceci est la partie controller qui recoit les requetes et renvoie les reponses http
//on cree une classe avec une methode index
class IndexController { 
//on cree la methode 
    public function index() { 

        $articleRepository= new ArticleRepository();
        $articles = $articleRepository->findAll();
        

        // require_once('../templates/page/indexView.php');} est remplacé par deux lignes de commande twig
        $loader = new \Twig\Loader\FilesystemLoader('../templates'); //apres avoir chargé Twig il attend le chemin vers tous les templates, voici ou sont passés mes fichiers twig
        $twig = new \Twig\Environment($loader); // on crée objet twig
    
        echo $twig->render('page/index.html.twig', ['articles'=>$articles]);// on fait un render
      

    // on affiche la view de l index ou sont presents tous les articles
    }
}

//on instancie la classe avec new 
// on appelle la methode

// $IndexController= new IndexController();
// $IndexController->index();













// permet de faire une requête SELECT sans parametres
//$stmt = $pdo->query("SELECT * FROM products");
// retourne dans un tableau tous les produits 
//$products = $stmt->fetch();



// var_dump($articles); on check si on recupere bien les articles



// class IndexController { 
//     //on cree la methode
//         public function index() { 
    
//         require_once('../config/config.php');
    
    
//         $dbConnection= new Dbconnection();
//         $pdo = $dbConnection->connect();
        
//         // Préparer la requête GETh
        
//         $stmt = $pdo->query("SELECT * FROM articles");
        
        
        
        
//         // Exécuter la requête on recupere
//         $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
//         require_once('../templates/page/indexView.php'); // on require la pageView apres avoir recuperer les données de la BDD pour afficher (on n'appelle plus le controller depuis la pageindexView mais elle est appelée ici dans le controller)
    
    
//     }
    
//     }
    
//     //on instancie la classe avec new 
//     // on appelle la methode
    
//     $IndexController= new IndexController();
//     $IndexController->index();