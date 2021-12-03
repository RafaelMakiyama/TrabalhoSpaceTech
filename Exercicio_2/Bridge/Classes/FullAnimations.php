<?php

class FullAnimations extends Streaming{

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }
}
