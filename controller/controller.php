<?php
switch($action){
    case "accueil":
        include "./view/vueBandeauMenu.php";
        include "./view/vueAccueil.php";
        break;

    case "connexion":
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        if(null!==getConnexion($login,$mdp)){
            $_SESSION["compte"] =getConnexion($login,$mdp);
            $_SESSION["contacts"]=getContacts();
            include "./view/vueBandeauMenu.php";
            include "./view/vueAccueil.php";
        }else{
            include "./view/vueBandeauMenu.php";
            include "./view/vueConnexion.php";
        }
        break;

    case "ajouter":
        include "./view/vueBandeauMenu.php";
        include "./view/vueAjout.php";
        break;

    case "ajout":
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $remarque = $_POST["remarque"];
        addContact($nom,$prenom,$tel,$email,$remarque);
        include "./view/vueBandeauMenu.php";
        include "./view/vueAccueil.php";
        break;

    case "modifier":
        $choix = $_POST["contact"]-1;
        $cont = $_SESSION["contacts"][$choix];
        include "./view/vueBandeauMenu.php";
        include "./view/vueModifContact.php";
        break;

    case "modifications":
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $tel = $_POST["tel"];
            $email = $_POST["email"];
            $remarque = $_POST["remarque"];
        if(isset($_POST["modif"])){
            modifyContact($id,$nom,$prenom,$tel,$email,$remarque);
        }
        if(isset($_POST["suppr"])){
            deleteContact($_POST["id"]);
        }
        include "./view/vueBandeauMenu.php";
        include "./view/vueAccueil.php";
        break;

    case "rechercher":
        include "./view/vueBandeauMenu.php";
        include "./view/vueRecherche.php";
        break;

    case "recherche":
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $remarque = $_POST["remarque"];
        $_SESSION["resultatsRecherche"]=searchContact($nom,$prenom,$tel,$email,$remarque);
        include "./view/vueBandeauMenu.php";
        include "./view/vueRecherche.php";
        
        break;

    default:
        include "./view/vueConnexion.php";
        break;
}