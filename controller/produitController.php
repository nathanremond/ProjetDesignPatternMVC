<?php

include('model/produitModel.php');

function afficherDernierProduit(){
    $dernierVelo = getDernierProduit();
    include('view/accueil.php');
}