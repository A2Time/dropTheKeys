<?php

require_once("../dropTheKeys/connexionBdd.php");
require_once '../dropTheKeys/security.php';


function renseignement($nom, $prenom, $email, $telephone, $demande, $message)
{
    $connexion = cnx();

    $sql = "INSERT INTO `client` (`nom_client`, `prenom_client`,`email_client`,`telephone_client`,`demande`,`message`)
    VALUES (:nom, :prenom, :email, :telephone, :demande, :mess) ";
    $req = $connexion->prepare($sql);

    $req->bindValue(":nom", $nom);
    $req->bindValue(":prenom", $prenom);
    $req->bindValue(":email", $email);
    $req->bindValue(":telephone", $telephone);
    $req->bindValue(":demande", $demande);
    $req->bindValue(":mess", $message);

    $req->execute();

};
