<?php
class PostgresAdapter implements IConnection {

    private $postgres;

    public function __construct(Postgres $postgres)
    {
        $this->postgres = $postgres;   
    }

    public function connection(){
        $this->postgres->connection();
    }

    public function mostrar(){
        $this->postgres->mostrar();
    }
}