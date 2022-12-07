<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/asset/form.css">
</head>

<!-- <body> -->
    <!-- <nav class="contain">
        <div class="navTop flex ">
            <img class="logo pointer" src="/asset/logo_principal.png" alt="">
            <div class="flex nav_btn">
                <a class="btn" href="#"> Estimation rapide</a>
                <img class="icons pointer" src="/asset/menuR.png" alt="">
            </div>
        </div>
        </div>
        <ul class="">
            <li class="">
                <a class="athelas" href="#">Accueil</a>
            </li>

            <li>
                <a href="#">Nos offres</a>
            </li>

            <li>
                <a href="#">Qui sommes-nous ?</a>
            </li>

            <li>
                <a href="#">Blog</a>
            </li>

            <li>
                <a href="/form.php"> Nous contacter</a>
            </li>
        </ul>
    </nav> -->
    <section id="formulaire">
        <div class="container">
            <div class="title">
                <img class="m_logo" src="/asset/logo.png" alt="">
                <p>Veuillez remplir le formulaire afin que nous puissions en savoir plus sur vous et vos besoins.</p>
                <!-- <img class="m_img" src="/asset/chambre.png" alt=""> -->
            </div>

            <form class="formulaire" action="../dropTheKeys/ajout_message.php" method="POST">
                <div class="saisi">
                    <!-- animation placeholder -->
                    <label for="nom">Nom</label>
                    <input type="text" name="nom_client" id="nom" placeholder="Saissisez votre nom">
                </div>

                <div class="saisi">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom_client" placeholder="Saissisez votre prénom">
                </div>

                <div class="saisi">
                    <label for="email">Email</label>
                    <input type="email" name="email_client" placeholder="Saissisez votre email">
                </div>

                <div class="saisi">
                    <label for="telephone">Telephone</label>
                    <input type="tel" name="telephone_client" placeholder="Saissisez votre telephone">
                </div>

                <fieldset class="radio">
                    <legend class="champ_lim" for="demande">Votre demande </legend>
                    <div class="saisi_radio">
                        <input type="radio" name="demande" value="devis">
                        <label for="devis">Demande de devis</label>
                    </div>
                    <div class="saisi_radio">
                        <input type="radio" name="demande" value="devis">
                        <label for="rappelle">Se faire rappeler</label>
                    </div>
                    <div class="saisi_radio">
                        <input type="radio" name="demande" value="devis">
                        <label for="devis">Besoin urgent</label>
                    </div>
                    <div class="saisi_radio">
                        <input type="radio" name="demande" value="devis">
                        <label for="devis">Devenir partenaire</label>
                    </div>
                    <div class="saisi_radio">
                        <input type="radio" name="demande" value="devis">
                        <label for="devis">Autres demandes</label>
                    </div>

                </fieldset>

                <div class="saisi">
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" rows="10"></textarea>
                </div>

                <input class="btn window pointer" type="submit" name="envoyer" value="Envoyez">
            </form>
        </div>
    </section>

<!-- </body> -->
<style>
    #formulaire {
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
}

.container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    width: 100%;
    max-width: 1100px;
}

.m_logo {
    width: 150px;
    height: 150px;
    object-fit: contain;
    padding: 20px;
    background-color: #E8D5C3;
    border-radius: 50%;
}

/* .m_img{
    width: 300px;
    height: 280px;
} */

.title {
    height: 300px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    padding: 20px;
    font-size: medium;
}

form {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    max-width: 500px;
    min-width: 450px;
    margin: 20px 30px;
}

.saisi {
    position: relative;
    max-width: 500px;
    width: 100%;
    margin: 30px 10px;
}

.saisi input,
textarea {
    width: 100%;
    border: none;
    border-bottom: solid 1px;
}

.saisi input {
    height: 30px;
    outline: none;
}

.radio {
    position: relative;
    width: 80%;
    margin-top: 40px;
}

.saisi label,
fieldset {
    position: absolute;
    top: -40px;
    left: 0;
    font-size: x-large;
    /* color: #743729; */
    max-width: 400px;
    font-family: champ_lim;
    padding: 0 10px;
    /* font-weight: 550; */
}

.saisi_radio label {
    font-size: medium;
}

.saisi_radio{
    /* border: solid; */
    padding: 0px 20px;
}
:placeholder-shown {
    font-size: medium;
    font-style: italic;
}

p {
    max-width: 300px;
    text-align: center;
}

#message {
    width: 100%;
}

input[type="submit"] {
    width: 150px;
    height: 60px;
    font-size: large;
    border: none;
    background: #E8D5C3;
    color: #000000;
    font-size: x-large ;
    font-style: italic;

}
</style>
</html>