<?php

include('bdd.php');

function setCommande($nom, $prenom, $email, $message, $id_produit){
    global $bdd;
    $commande = $bdd->prepare("INSERT INTO commande(nom, prenom, email, message, id_produit) VALUES(?,?,?,?,?);");
    return $commande->execute([$nom, $prenom, $email, $message, $id_produit]);
}