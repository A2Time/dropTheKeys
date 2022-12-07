<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <form action="/dropTheKeys/calc_estim.php" method="post">
        <div>
            <label for="nom">Bonjour ! Mon nom est :</label>
            <input type="text" name="nom" id="nom">
        </div>

        <fieldset id="type_lgmnt">
            <legend>Le type de votre logement est :</legend>
            <div>
                <input type="radio" name="type_logement" id="studio" value="studio">
                <label for="studio">Studio</label>
            </div>

            <div>
                <input type="radio" name="type_logement" id="t1" value="t1">
                <label for="t1">T1</label>
            </div>

            <div>
                <input type="radio" name="type_logement" id="t2" value="t2">
                <label for="t2">T2</label>
            </div>

            <div>
                <input type="radio" name="type_logement" id="t3" value="t3">
                <label for="t3">T3</label>
            </div>

            <div>
                <input type="radio" name="type_logement" id="t4" value="t4">
                <label for="t4">T4</label>
            </div>

            <div>
                <input type="radio" name="type_logement" id="t5" value="t5">
                <label for="t5">T5</label>
            </div>

            <div>
                <input type="radio" name="type_logement" id="maison" value="maison">
                <label for="maison">Maison</label>
            </div>

            <div>
                <input type="radio" name="type_logement" id="autres" value="autres">
                <label for="autres">Autres</label>
            </div>

        </fieldset>

        <div>
            <label for="adresse">Adresse du logement concerné <em>*</em></label>
            <input type="text" name="adresse" id="adresse">
        </div>

        <fieldset id="type_estim">
            <legend>Quels types d'estimation souhaitez-vous ?</legend>
            <div>
                <input type="radio" name="type_estim" id="courte" value="courte">
                <label for="court">Location courte durée (nuitée, hebdomadaire...)</label>
            </div>

            <div>
                <input type="radio" name="type_estim" id="moyen" value="moyen">
                <label for="moyen">Location moyennne durée ( 12 mois )</label>
            </div>

            <div>
                <input type="radio" name="type_estim" id="long" value="long">
                <label for="long">Location longue durée</label>
            </div>

            <div>
                <input type="radio" name="type_estim" id="autres" value="autres">
                <label for="autres">Tous types de locations</label>
            </div>
        </fieldset>

        <div>
            <label for="phone">Un numero de téléphone pour vous joindre <em>*</em></label>
            <input type="tel" name="phone" id="phone">
        </div>

        <div>
            <label for="email">Adresse e-mail</label>
            <input type="email" name="email" id="email">
        </div>

        <input type="submit" name="estimation" value="Envoyer">
    </form>
</body>

</html>