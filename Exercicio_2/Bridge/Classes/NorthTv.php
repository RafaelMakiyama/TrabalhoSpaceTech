<?php

class NorthTv extends Streaming{

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }
}