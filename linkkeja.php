<?php require_once 'tarkastus.php'; 
varmista_kirjautuminen();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="tyylitiedostot/tyylit.css" />
        <title>Linkkejä</title>

    </head>
    <body>
        <?php require 'linkkilista.php'; ?>
        <div>
            <h1 class="otsikko">Linkkejä</h1>
        </div>
    </body>