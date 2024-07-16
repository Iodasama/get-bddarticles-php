<?php

//on cree une classe avec une methode index
class IndexController { 
//on cree la methode
    public function index() { 

    require_once('../config/config.php');


    $dbConnection= new Dbconnection();
    $pdo = $dbConnection->connect();
    
    // Préparer la requête GET
    
    $stmt = $pdo->query("SELECT * FROM articles");
    
    
    
    
    // Exécuter la requête on recupere
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    require_once('../templates/page/indexView.php'); // on require la pageView apres avoir recuperer les données de la BDD pour afficher (on n'appelle plus le controller depuis la pageindexView mais elle est appelée ici dans le controller)


}

}

//on instancie la classe avec new 
// on appelle la methode

$IndexController= new IndexController();
$IndexController->index();













// permet de faire une requête SELECT sans parametres
//$stmt = $pdo->query("SELECT * FROM products");
// retourne dans un tableau tous les produits 
//$products = $stmt->fetch();



// var_dump($articles); on check si on recupere bien les articles