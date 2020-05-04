<?php

$products = ['affiche-3', 'affiche-4', 'affiche-5', 'affiche-8', 'affiche-1','affiche-6'];

require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', [ 'products' => $products]);