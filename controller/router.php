<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : '';


switch($page){
    case 'velos':
        include('controller/produitController.php');
        afficherProduits();
        break;

    default:
        include('controller/produitController.php');
        afficherDernierProduit();
}