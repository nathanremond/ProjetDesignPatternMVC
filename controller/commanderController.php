<?php

include('model/commanderModel.php');
include('model/produitModel.php');

function getFormCommander(){
    $velos = getProduits();
    include('view/commander.php');
}

function commander(){
    $id_produit = $_POST['select'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if(setCommande($nom, $prenom, $email, $message, $id_produit)){
        echo 'Commande envoyée !';
    }
    else{
        echo 'Erreur de l\'envoi de la commande';
    }
}