<?php
var_dump($_POST);

require_once("../dropTheKeys/security.php");
require_once("../dropTheKeys/modele.php");

if (!empty($_POST)) {
    if (
        isset($_POST["nom_client"], $_POST["prenom_client"], $_POST["email_client"], $_POST["telephone_client"], $_POST["demande"], $_POST["message"])
        && !empty($_POST["nom_client"]) && !empty($_POST["prenom_client"]) && !empty($_POST["email_client"]) && !empty($_POST["telephone_client"]) && !empty($_POST["demande"]) && !empty($_POST["message"])
    ) {
        if (!filter_var($_POST["email_client"], FILTER_VALIDATE_EMAIL)) {
            die("l'adresse email est incorrecte");
        }

        $nom = $_REQUEST["nom_client"];
        $prenom = $_REQUEST["prenom_client"];
        $email = $_REQUEST["email_client"];
        $telephone = $_REQUEST["telephone_client"];
        $demande = $_REQUEST["demande"];
        $message = $_REQUEST["message"];
        var_dump($_REQUEST);
        // echo 'prise en charge du formulaire';
        // var_dump($nom, $prenom, $email, $telephone, $demande, $message);
        if (isset($_REQUEST['envoyer'])) {
            $nom = security($_REQUEST["nom_client"]);
            $prenom = security($_REQUEST["prenom_client"]);
            $email = security($_REQUEST["email_client"]);
            $telephone = security($_REQUEST["telephone_client"]);
            $demande = security($_REQUEST["demande"]);
            $message = security($_REQUEST["message"]);
            var_dump($nom, $prenom, $email, $telephone, $demande, $message);
            
            renseignement($nom, $prenom, $email, $telephone, $demande, $message);
            // echo 'formulaire envoyé ';
        }else{
            // echo 'probleme survenu';
        }
    } else {
        // echo "formulaire incomplet";
    }
}
