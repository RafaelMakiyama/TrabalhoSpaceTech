<?php

require_once('../autoload.php');

class Postgres {

    function connectionPostgres(){
        echo "Connectado com o Postgres";
    }

    function mostrar(){
        return " está conectado com o Postgres";
    }

}