<!--Swot-sivuston etusivu. Käyttäjä pääsee näkemään eri asioita riippuen siitä, onko hän kirjautunut järjestelmään vai ei. 
-->

<?php
require_once 'tarkastus.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="tyylitiedostot/tyylit.css" />
        <title>Etusivu</title>
    </head>

    <body>
        <?php require 'linkkilista.php'; ?>

        <div>
            <h1 class="otsikko">Tervetuloa!</h1>
        </div>


        <?php if (!ei_kirjautunut()) { ?>
            <div>
                <br>
                <p>

                    Tämä sivusto on tarkoitettu World of Tanks -pelin klaanien SPOF ja SPUF
                    jäsenille ja tukijoukoille.

                    <br>
                    Kirjautumalla sisään pääset näkemään lisää tietoja.

                </p>

            </div>
        <?php } ?>



        <?php if (on_kirjautunut()) { ?>

            <?php if (($sessio->tunniste == 'spoffilainen')) { ?>

                <div>
                    <br>
                    <h2>Olet kirjautunut sisään käyttäjänä: Spoffilainen</h2>

                    <p>

                        Näiltä sivuilta löydät tietoa klaanin kultavarannon jakamisesta ja muista asioista.
                        <br>
                        Lisäksi sivuilta löytyy kokoelma hyödyllisiä linkkejä.

                    </p>

                </div>
            <?php } ?>
        <?php } ?>


    </body>

</html>