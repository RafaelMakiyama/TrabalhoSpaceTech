<?php
class MySqlAdapter implements IConnection {

    private $mysql;

    public function __construct(Mysql $mysql)
    {
        $this->mysql = $mysql;   
    }

    public function connection(){
        $this->mysql->connection();
    }

    public function mostrar(){
        $this->mysql->mostrar();
    }
}