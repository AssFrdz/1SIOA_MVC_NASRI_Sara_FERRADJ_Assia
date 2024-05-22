<?php
require_once "connexion.php";


function getConnexion($login,$mdp){
    $contacts = connexionPDO()->query("SELECT * from contact");
    $contacts = $contacts->fetchAll();
    foreach($contacts as $contact){
        
        if($contact["email"]==$login && $contact["mdp"]==$mdp){
            return $contact;
            break;
        }
    }
}

function getContacts(){
    $contacts = $contacts = connexionPDO()->query("SELECT id,nom,prenom,email,tel,remarque from contact");
    $contacts = $contacts->fetchAll();
    return $contacts;
}

function modifyContact($index,$nom,$prenom,$tel,$email,$remarque){
    $rqt = "UPDATE Contact SET nom=:nom,prenom=:prenom,tel=:tel,email=:email,remarque=:remarque WHERE id=:id";
    $stmt=connexionPDO()->prepare($rqt);
    $stmt->bindParam(":id",$index);
    $stmt->bindParam(":nom",$nom);
    $stmt->bindParam(":prenom",$prenom);
    $stmt->bindParam(":tel",$tel);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":remarque",$remarque);
    if($stmt->execute()){
        echo "Modification effectuée avec succès.";
    }else{
        echo "Erreur lors de la modification de données dans la base.";
    }
    $_SESSION["contacts"]=getContacts();

}

function deleteContact($index){
    $rqt="DELETE FROM Contact WHERE id=:id";
    $stmt=connexionPDO()->prepare($rqt);
    $stmt->bindParam(":id",$index);
    if($stmt->execute()){
        echo "Suppression effectuée avec succès.";
    }else{
        echo "Erreur lors de la suppression de données dans la base.";
    }
    $_SESSION["contacts"]=getContacts();
    
}

function addContact($nom,$prenom,$tel,$email,$remarque){
    $rqt = "INSERT INTO Contact (nom,prenom,tel,email,remarque) VALUES (:nom,:prenom,:tel,:email,:remarque)";
    $stmt = connexionPDO()->prepare($rqt);
    $stmt->bindParam(":nom",$nom);
    $stmt->bindParam(":prenom",$prenom);
    $stmt->bindParam(":tel",$tel);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":remarque",$remarque);
    if($stmt->execute()){
        echo "Contact enregistré avec succès.";
    }else{
        echo "Enregistrement échoué dans la base.";
    }
    $_SESSION["contacts"]=getContacts();
}

function searchContact($nom,$prenom,$tel,$email,$remarque){
    $rqt = "SELECT * FROM Contact
    WHERE nom LIKE :nom
    AND prenom LIKE :prenom
    AND email LIKE :email
    AND tel LIKE :tel
    AND remarque LIKE :remarque";
     $nom = '%' . $nom . '%';
     $prenom = '%' . $prenom . '%';
     $email = '%' . $email . '%';
     $tel = '%' . $tel . '%';
     $remarque = '%' . $remarque . '%';
    $stmt = connexionPDO()->prepare($rqt);
    $stmt->bindParam(":nom",$nom);
    $stmt->bindParam(":prenom",$prenom);
    $stmt->bindParam(":tel",$tel);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":remarque",$remarque);
    if($stmt->execute()){
        $contacts = $stmt->fetchAll();
        return $contacts;
        echo "Recherche effectuée avec succès.";
    }else{
        echo "Recherche infructueuse.";
    }
}