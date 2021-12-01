<?php
require_once('../../autoload.php');


class PostgresAdapter implements IConnection {

    private $postgres;

    public function __construct(Postgres $postgres)
    {
        $this->postgres = $postgres;   
    }

    public function connection(){
        $this->postgres->connectionpostgres();
    }

    public function mostrar(){
        $this->postgres->mostrar();
    }
}