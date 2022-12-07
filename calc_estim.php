<?php

require_once 'modele.php';
require_once 'security.php';

if(!empty ($_POST)){
    
    if(isset($_POST["nom"], $_POST["type_logement"], $_POST["adresse"], $_POST["type_estim"], $_POST["phone"], $_POST["email"])
    && !empty($_POST["nom"])  && !empty($_POST["type_logement"])   && !empty($_POST["adresse"])   && !empty($_POST["type_estim"])   && !empty($_POST["phone"])   && !empty($_POST["email"])){
        
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("l'adresse email est incorrecte");
        }

        $nom = $_REQUEST["nom"];
        $typeLogement = $_REQUEST["type_logement"];
        $adresse = $_REQUEST["adresse"];
        $typeEstim = $_REQUEST["type_estim"];
        $phone = $_REQUEST["phone"];
        $email =$_REQUEST["email"];

        if(isset($_REQUEST['estimation'])){
            $nom = security($_REQUEST["nom"]);
            $typeLogement = security($_REQUEST["type_logement"]);
            $adresse = security($_REQUEST["adresse"]);
            $$typeEstim = security($_REQUEST["type_estim"]);
            $phone = security($_REQUEST["phone"]);
            $email = security($_REQUEST["email"]);
            
            estimation($nom, $typeLogement, $adresse, $typeEstim, $phone, $email);
            echo 'ca marche';
        }else{
            echo' ca marche pas ';
        }
    }else{
        die ("le formulaire est incomplet");
    }


}
?>