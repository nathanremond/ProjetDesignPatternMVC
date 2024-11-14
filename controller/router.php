<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';


switch($page){

    default:
        include('view/accueil.php');
}