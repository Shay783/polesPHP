<?php



$pdo = new PDO('mysql:host=localhost; dbname=boutique', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

session_start();

$erreur = '';
$erreur_index = '';
$validate = '';
$validate_index = '';
$content = '';


// on declare une constante RACINE_SITE qui va servir à definir le chemin physique vers notre projet (ses sous-dossier et fichiers)
define('RACINE_SITE', $_SERVER['DOCUMENT_ROOT'] . '/boutique/');

// on declare une constante pour definir notre URL (http en local, puis plus tard http en ligne)
// cette information sera corriger plus tard lorsque le site sera en ligne (on remplacera le localhost par notre nom de domaine)
define('URL', 'http://localhost/boutique/');

//boucle foresh pour protéger chaque valeur provenant d'un formulaire avant de l'affecter dans sa colonne en BDD
// in la protege avec htmlspecialchars des injections sql failles xss et on lui ajoute trim() qui supprime tous les espaces avant et après la donnée. Espaces générés de maniere souvent involontaure et maladroite
foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars(trim($value));
}

//même boucle, cette fois pour protéger les informations qui transitent dans l'URL
foreach ($_GET as $key => $value) {
    $_GET[$key] = htmlspecialchars(trim($value));
}

require_once('fonctions.php');
