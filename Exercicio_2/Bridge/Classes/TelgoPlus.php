<?php

class TelgoPlus extends Streaming{

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }
}