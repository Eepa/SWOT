<!--Järjestelmänkirjautumissivu, jonka kirjautumattomat käyttäjät pääsevät näkemään.
Sivun avulla käyttäjä voi syöttää järjestelmään salasanansa ja käyttäjätunnuksensa ja 
kirjautua sivustolle.-->
<?php
require_once 'tarkastus.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../tyylitiedostot/tyylit.css" />
        <title>Sisäänkirjautuminen</title>

    </head>

    <body>
        <?php require 'linkkilista.php'; ?>
        <h1 class="otsikko">Sisäänkirjautuminen - Swot</h1>

        <!--Sisäänkirjautumislomake, johon käyttäjä syöttää tarvittavat tiedot.-->

        <div> 
            <h2>Kirjaudu järjestelmään</h2>

            <form action="kirjaudu.php?sis" method="POST">
                <?php if (isset($_GET['epao'])) { ?> 
                    <p id="virhe">
                        <?php
                        echo 'Salasana tai käyttäjätunnus oli väärä';
                    }
                    ?> </p>


                <p>Syötä tunnuksesi ja salasanasi:</p>

                <fieldset class="kirjautuminenfieldset" id="sisaankirjaus">


                    <label class="kirjautuminenlabel" for="kayttajanimi">Käyttäjätunnus:</label>

                    <input type="text" name="kayttajanimi" id="kayttajanimi" maxlength="30" required><br>



                    <label class="kirjautuminenlabel" for="salasana">Salasana:</label> 

                    <input type="password" name="salasana" id="salasana" maxlength="30" required><br>

                    <br>

                    <input class="kirjnappula" type="submit" value="Kirjaudu">
                </fieldset>

            </form>
        </div>



    </body>

</html>
