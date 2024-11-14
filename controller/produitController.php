<?php

include('model/produitModel.php');

function afficherDernierProduit(){
    $dernierVelo = getDernierProduit();
    include('view/accueil.php');
}

function afficherProduits(){
    $velos = getProduits();
    include('view/velos.php');
}