<?php

include('model/contactModel.php');

function getFormContact(){
    include('view/contact.php');
}

function contact(){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if(setContact($nom, $prenom, $email, $message)){
        echo 'Message envoyé !';
    }
    else{
        echo 'Erreur lors de l\'envoi du message';
    }
}