<?php

require_once('../autoload.php');

class Mysql {

    function connection(){
        echo "Connectado com o MYSQL";
    }

    function mostrar(){
        return " está conectado com o MYSQL";
    }

}