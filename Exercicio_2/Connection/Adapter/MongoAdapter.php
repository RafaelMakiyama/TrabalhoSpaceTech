<?php
require_once('../../autoload.php');


class MongoAdapter implements IConnection {

    private $mongo;

    public function __construct(Mongo $mongo)
    {
        $this->mongo = $mongo;   
    }

    public function connection(){
        $this->mongo->connectionmongo();
    }

    public function mostrar(){
        $this->mongo->mostrar();
    }
}