<?php

require_once('../autoload.php');

class MariaDB {

    function connection(){
        echo "Connectado com o MariaDB";
    }

    function mostrar(){
        return " está conectado com o MariaDB";
    }

}