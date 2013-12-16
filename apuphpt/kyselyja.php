<!--Järjestelmässä käytettävät kyselyt ja niiden suorittaja. Kyselynsuorittaja 
määritellään luokasta Kyselyja.--> 

<?php

class Kyselyja {

    private $_pdo;

    public function __construct($pdo) {
        $this->_pdo = $pdo;
    }

    private function valmistelut($kyselylause) {
        return $this->_pdo->prepare($kyselylause);
    }

    public function tunnistus($kayttajanimi, $salasana) {
        $kysely = $this->valmistelut('SELECT tunniste FROM spofkayttaja WHERE kayttajanimi = ? AND salasana = ?');
        
        if ($kysely->execute(array($kayttajanimi, $salasana))) {
            return $kysely->fetchObject();
        }
        return null;
    }

}

require 'pa.php';

$kyselyita = new Kyselyja($pdo);
?>

