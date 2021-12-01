<?php
require_once('../../autoload.php');


class MySqlAdapter implements IConnection {

    private $mysql;

    public function __construct(Mysql $mysql)
    {
        $this->mysql = $mysql;   
    }

    public function connection(){
        $this->mysql->connectionMySql();
    }

    public function mostrar(){
        $this->mysql->mostrar();
    }
}