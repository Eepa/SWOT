<!--Kirjautumisen suorittava koodi. Kirjautumisen apuna kutsutaan tarkastus.php:tä, jonka avulla 
välitetään tietokantakyselyitä suorittavan luokan ilmentymä kirjautumistarkistusta varten. 
Ohjaa käyttäjän oikealle sivulle sen mukaan, mitä käyttäjä oli tekemässä (uloskirjautuminen, onnistunut 
sisäänkirjautuminen, epäonnistunut sisäänkirjautuminen).-->

<?php

require_once 'tarkastus.php';

if (isset($_GET['sis'])) {

    $kayttaja = $kyselyita->tunnistus($_POST['kayttajanimi'], $_POST['salasana']);
    
    if ($kayttaja) {
        $sessio->tunniste = $kayttaja->tunniste;
        ohjaa('index.php');
    } 
    else {
        ohjaa('sisaankirjaus.php?epao');
    }
} elseif (isset($_GET['ulos'])) {
    unset($sessio->tunniste);
    ohjaa('index.php');
} else {
    die('Jotain hämärää tapahtui..');
}
?>
