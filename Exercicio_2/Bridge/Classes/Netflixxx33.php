<?php

class Netflixxx33 extends Streaming{

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }

    public function mostrarStreaming()
    {
        return "Você está na Netflixxx33 ";
    }  
}