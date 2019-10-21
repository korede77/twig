<?php
require '../vendor/autoload.php';

$products = ['mangue','ananas','orange','pomme','abricot','citron','raisin'];

$loader = new Twig\Loader\FilesystemLoader( '../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]);