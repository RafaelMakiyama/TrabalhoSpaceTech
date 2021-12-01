<?php

require_once('../autoload.php');

class Mongo {

    function connectionMongo(){
        echo "Connectado com o Mongo";
    }

    function mostrar(){
        return " está conectado com o Mongo";
    }

}