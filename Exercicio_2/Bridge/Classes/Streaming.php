<?php

abstract class Streaming{
    protected $conexao;

    public function __construct(Connection $conexao){
        $this->conexao = $conexao;
    }

    abstract public function conexaoBancoDeDados();
    
}
?>