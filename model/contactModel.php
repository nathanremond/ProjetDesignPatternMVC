<?php

include('bdd.php');

function setContact($nom, $prenom, $email, $message){
    global $bdd;
    $contact = $bdd->prepare("INSERT INTO contact(nom, prenom, email, message) VALUES(?,?,?,?);");
    return $contact->execute([$nom, $prenom, $email, $message]);
}