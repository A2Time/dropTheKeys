
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/asset/estimation.css">
    <script src="/navbar.js" defer></script>
</head>

<body class="flex">
    <nav class="contain">
        <div class="navTop flex ">
            <a href="/index.php"><img class="logo pointer" src="/asset/logo_principal.png" alt=""></a>
            <div class="flex nav_btn">
                <a class="btn" href="/estimation.php"> Estimation rapide</a>
                <img id="burger" class="icons pointer burger" src="/asset/menuR.png" alt="">
                <img id="close_burger" class="icons pointer burger" src="/asset/close.png" alt="">
            </div>
        </div>

        <ul id="nav_links" class="">
            <li class="">
                <a class="athelas" href="/index.php">Accueil</a>
            </li>

            <li>
                <a href="/offre.php">Nos offres</a>
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
    </nav>

    <header class="flex">
        <img src="/asset/logo.png" alt="">
        <h2 class="champ_lim">Obtenez votre tarif rapidement !</h2>
        <h3 class="autography text_center">Pour aller plus vite contactez nous au <br> 06 ** ** ** ** **</h3>
    </header>

    <form class="" action="/dropTheKeys/calc_estim.php" method="post">
        <div class="ipt_text">
            <label class="" for="nom"><em class="champ_lim">Bonjour ! </em> <br><br> Mon nom est :</label>
            <input type="text" name="nom" id="nom" placeholder="Saisissez votre nom">
        </div>


        <fieldset id="type_lgmnt">
            <legend>Le type de votre logement est :</legend>
            <div class="radio">
                <input type="radio" name="type_logement" id="studio" value="studio">
                <label for="studio">Studio</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_logement" id="t1" value="t1">
                <label for="t1">T1</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_logement" id="t2" value="t2">
                <label for="t2">T2</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_logement" id="t3" value="t3">
                <label for="t3">T3</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_logement" id="t4" value="t4">
                <label for="t4">T4</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_logement" id="t5" value="t5">
                <label for="t5">T5</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_logement" id="maison" value="maison">
                <label for="maison">Maison</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_logement" id="autres" value="autres">
                <label for="autres">Autres</label>
            </div>

        </fieldset>

        <div class="ipt_text">
            <label class="champ_lim" for="adresse">Adresse du logement concerné <em>*</em></label>
            <input type="text" name="adresse" id="adresse" placeholder="Saisissez l'adresse et le code postale">
        </div>


        <fieldset id="type_estim">
            <legend>Quels types d'estimation souhaitez-vous ?</legend>
            <div class="radio">
                <input type="radio" name="type_estim" id="courte" value="courte">
                <label for="court">Location courte durée (nuitée, hebdomadaire...)</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_estim" id="moyen" value="moyen">
                <label for="moyen">Location moyennne durée ( 12 mois )</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_estim" id="long" value="long">
                <label for="long">Location longue durée</label>
            </div>

            <div class="radio">
                <input type="radio" name="type_estim" id="autres" value="autres">
                <label for="autres">Tous types de locations</label>
            </div>
        </fieldset>

        <div class="ipt_text">
            <label for="phone">Un numero de téléphone pour vous joindre <em>*</em></label>
            <input type="tel" name="phone" id="phone">
        </div>

        <div class="ipt_text">
            <label for="email">Adresse e-mail</label>
            <input type="email" name="email" id="email">
        </div>

        <input class="window btn pointer" type="submit" name="estimation" value="Envoyer">
    </form>
</body>

</html>