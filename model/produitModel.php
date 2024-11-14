<?php

include('bdd.php');

function getDernierProduit(){
    global $bdd;
    return $bdd->query('SELECT * FROM produit ORDER BY id_produit DESC LIMIT 1')->fetchAll(PDO::FETCH_ASSOC);
}

function getProduits(){
    global $bdd;
    return $bdd->query('SELECT * FROM produit')->fetchAll(PDO::FETCH_ASSOC);
}

function getProduitById($id){
    global $bdd;
    return $bdd->query("SELECT * FROM produit WHERE id_produit=$id")->fetchAll(PDO::FETCH_ASSOC);
}