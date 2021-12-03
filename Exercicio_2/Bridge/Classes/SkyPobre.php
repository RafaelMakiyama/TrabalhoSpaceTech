<?php

class SkyPobre extends Streaming{

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }
}