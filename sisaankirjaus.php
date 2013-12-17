<!--Järjestelmänkirjautumissivu, jonka kirjautumattomat käyttäjät pääsevät näkemään.
Sivun avulla käyttäjä voi syöttää järjestelmään salasanansa ja käyttäjänimensä ja 
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

        <div>
            <h1 class="otsikko">Sisäänkirjautuminen - Swot</h1>
            <h2>Syötä käyttäjänimesi ja salasanasi:</h2>
            <form action="kirjaudu.php?sis" method="POST">

                <fieldset class="kirjautuminenfieldset" id="sisaankirjaus">
                    <?php if (isset($_GET['epao'])) { ?> 
                        <p id="virhe">
                            <?php
                            echo 'Salasana tai käyttäjätunnus oli väärä';
                        }
                        ?>
                    <table >
                        <tr>
                            <td><label class="kirjautuminenlabel" for="kayttajanimi">Käyttäjänimi:</label></td>
                            <td> <input type="text" name="kayttajanimi" id="kayttajanimi" maxlength="30" required><br></td>
                        </tr>

                        <tr>
                            <td><label class="kirjautuminenlabel" for="salasana">Salasana:</label> </td>
                            <td><input type="password" name="salasana" id="salasana" maxlength="30" required><br></td>
                        </tr>

                        <tr>
                            <td><input class="kirjnappula" type="submit" value="Kirjaudu"></td>
                        </tr>
                    </table>

                </fieldset>
            </form>
        </div>

    </body>



</html>
