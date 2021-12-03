<?php
// require_once 'autoload.php';

class OracleAdapter implements IConnection {

    private $oracle;

    public function __construct(Oracle $oracle)
    {
        $this->oracle = $oracle;   
    }

    public function connection(){
        $this->oracle->connection();
    }

    public function mostrar(){
        $this->oracle->mostrar();
    }
}