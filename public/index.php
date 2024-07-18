<?php

require_once('../controller/addArticleController.php');
require_once('../controller/indexController.php');


$requestUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/piscine-Blog/public/', '', $uri);
$endUri = trim($endUri, '/');

if($endUri === "") {

    $indexController = new IndexController();
    $indexController->index();

} else if ($endUri === "add-article") {

    $addArticleController = new AddArticleController();
    $addArticleController->addArticle();

} else if ($endUri === "show-article") {

    $addArticleController = new AddArticleController();
    $addArticleController->showArticle(); 

} else if ($endUri === "delete-article") {  

//j'instancie et j'appelle ma methode delete
    $addArticleController = new AddArticleController();
    $addArticleController->deleteArticle(); 
    

} else {
    echo '<p>Dégage</p>';
}