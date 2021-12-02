<?php
class MongoAdapter implements IConnection {

    private $mongo;

    public function __construct(Mongo $mongo)
    {
        $this->mongo = $mongo;   
    }

    public function connection(){
        $this->mongo->connection();
    }

    public function mostrar(){
        $this->mongo->mostrar();
    }
}