<?php

try {
    $bdd = new PDO("pgsql:host=localhost;port=5432;dbname=Smartbike", "postgres", "postgres");
} 
catch (ErrorException $e) {
    echo $e;
}