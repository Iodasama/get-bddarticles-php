<?php
require_once('../config/config.php');


$dbConnection= new Dbconnection();
$pdo = $dbConnection->connect();
//$products = [];
// Préparer la requête GET

$stmt = $pdo->query("SELECT * FROM articles");




// Exécuter la requête on recupere
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once('../templates/page/indexView.php');





// permet de faire une requête SELECT sans parametres
//$stmt = $pdo->query("SELECT * FROM products");
// retourne dans un tableau tous les produits 
//$products = $stmt->fetch();



// var_dump($articles); on check si on recupere bien les articles