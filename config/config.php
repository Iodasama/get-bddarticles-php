<?php



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(60); 

// on se connecte a la BDD, connection entre Php et Sql
// on check que le local host et le password sont bons, 8889 pour mac et root par defaut (peutetre changé)
$dsn = 'mysql:host=localhost:8889;dbname=article';
$username = 'root';
$password = 'root';

// la classe Pdo a un constructeur qui recupere et s'occupe de la connection
try {
    $pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
// try & catch pour la gestion d'erreurs et renvoie un message d'erreur si pb 


// on teste en chargeant dans son  navigateur n'importe quel fichier de view qu'on a déjà utilisé pour voir si t'as une erreur ou non