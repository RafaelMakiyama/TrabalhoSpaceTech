<?php

abstract class Streaming{
    private $conexao;

    public function __construct(Connection $conexao){
        $this->conexao = $conexao;
    }

    abstract function connection();
    
}
?>