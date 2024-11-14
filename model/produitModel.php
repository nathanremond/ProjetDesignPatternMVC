<?php

include('bdd.php');

function getDernierProduit(){
    global $bdd;
    return $bdd->query('SELECT * FROM produit ORDER BY id_produit DESC LIMIT 1')->fetchAll(PDO::FETCH_ASSOC);
}

