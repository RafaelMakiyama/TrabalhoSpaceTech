<?php

require_once('../autoload.php');

class Mongo {

    function connection(){
        echo "Connectado com o Mongo";
    }

    function mostrar(){
        return " está conectado com o Mongo";
    }

}