<?php

class Sessio {

    public function __construct() {
        session_start();
    }

    public function __set($tunniste, $arvo) {
        $_SESSION[$tunniste] = $arvo;
    }

    public function __get($tunniste) {
        if ($this->__isset($tunniste)) {
            return $_SESSION[$tunniste];
        }
        return null;
    }

    public function __isset($tunniste) {
        return isset($_SESSION[$tunniste]);
    }

    public function __unset($tunniste) {
        unset($_SESSION[$tunniste]);
    }

}

$sessio = new Sessio();
?>