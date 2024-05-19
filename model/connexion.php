<?php
function connexionPDO(){
$login = "root";
$mdp="";
$host="localhost";
$bd="gestion_contact";
try{
    $bdd=new PDO("mysql:host=$host;dbname=$bd;charset=utf8",$login,$mdp);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}

return $bdd;
}