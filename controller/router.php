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

    case 'contact':
        include('controller/contactController.php');
        getFormContact();
        break;
    
    case 'verifiercontact':
        include('controller/contactController.php');
        contact();
        break;
    
    default:
        include('controller/produitController.php');
        afficherDernierProduit();
}