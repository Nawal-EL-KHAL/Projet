<?php

// Démarrer la session
session_start();


require 'vendor/autoload.php'; // Autoloader pour Twig

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialiser Twig
$loader = new FilesystemLoader('templates'); // Assurez-vous que 'templates' contient 'login.html.twig'
$twig = new Environment($loader);


// Définir la page active
$pageActive = 'programme'; 

// Afficher la page de connexion (formulaire)
echo $twig->render('programme.html.twig', [
    'pageActive' => $pageActive,
]);
