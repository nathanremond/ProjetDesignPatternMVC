<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : '';
$velo = (isset($_GET['velo'])) ? $_GET['velo'] : '1';


switch($page){
    case 'velos':
        include('controller/produitController.php');
        afficherProduits();
        break;
        
    case 'infos':
        include('controller/produitController.php');
        afficherProduitParId();
        break;
    
    case 'commander':
        include('controller/commanderController.php');
        getFormCommander();
        break;

    case 'verifiercommande':
        include('controller/commanderController.php');
        commander();
        break;
    
    default:
        include('controller/produitController.php');
        afficherDernierProduit();
}