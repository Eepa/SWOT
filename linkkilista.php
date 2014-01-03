<!-- Linkkilista määrittelee järjestelmään navigointipalkin ja sen ominaisuuksia. 
Navigointipalkin tietylle sivulle johtava linkki poistuu käytöstä, jos käyttäjä on 
siirtynyt kyseiselle sivulle. Tästä ominaisuudesta vastataan JavaScript-koodin avulla.-->

<?php require_once 'tarkastus.php'; ?>
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="tyylitiedostot/tyylit.css" />

    </head>
    <body>
        <script language="JavaScript">
            document.addEventListener("DOMContentLoaded", function() {
                // dokumentin KAIKKI a-elementit
                linkit = document.getElementsByTagName("a");

                for (var a = 0; a < linkit.length; a++) {
                    if (document.location.href.match(linkit[a].href)) {
                        // a-elementti ilman href-attribuuttia on validi
                        linkit[a].removeAttribute("href");
                        linkit[a].setAttribute("class", "valittu");
                    }
                }
            }, false);

        </script>

        <header>
            <div><ul id="navbar">
                    <?php if (!ei_kirjautunut()) { ?>
                        <li><a href="index.php">Etusivu</a></li>

                        <li><a href="sisaankirjaus.php">Sisäänkirjautuminen</a></li>
                    <?php } ?>

                    <?php if (on_kirjautunut()) { ?>

                        <!--Jos käyttäjä on kirjautunut järjestelmään, näkyvät hänellä seuraavat linkit navigointipalkissa.-->


                        <li><a href="index.php">Etusivu</a></li>

                        <li><a href="linkkeja.php">Linkkejä</a></li>

                        <!--Jos käyttäjä on spoffilainen niin hän näkee lisäksi seuraavat sivut.-->
                        <?php if (($sessio->tunniste == 'spoffilainen')) { ?>

                            <li><a href="#">Kultajaot</a>
                                <ul>
                                    <li><a href="kultajaot.php">Normaali</a></li>
                                    <li><a href="kultajaotsort.php">Järjestetty</a></li>
                                </ul>
                            </li>




                        <?php } ?>

                        <li><a href="kirjaudu.php?ulos">Uloskirjautuminen</a></li>
                    <?php } ?>

                </ul>
            </div>
            <br>
        </header>

    </body>
</html>
