<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../dropTheKeys/ajout_message.php" method="POST">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom_client" id="nom">
        </div>

        <div class="prenom">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom_client" placeholder="Saissisez votre prénom">
        </div>

        <div class="email">
            <label for="email">Email</label>
            <input type="email" name="email_client" placeholder="Saissisez votre email">
        </div>

        <div class="telephone">
            <label for="telephone">Telephone</label>
            <input type="tel" name="telephone_client" placeholder="Saissisez votre telephone">
        </div>

        <div class="demande">
            <label for="demande">Votre demande :</label>
            <input type="radio" name="demande" value="devis">Demande de devis
            <input type="radio" name="demande" value="rappelle">Se faire rappeler
            <input type="radio" name="demande" value="urgence">Besoin urgent
            <input type="radio" name="demande" value="partenariat">Devenir partenaire
            <input type="radio" name="demande" value="autre">Autres demandes

        </div>

        <div class="message">
            <label for="message">Votre message</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <input type="submit" name="envoyer" value="CREATE">
    </form>
</body>

</html>