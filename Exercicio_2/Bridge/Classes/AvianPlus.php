<?php

class AvianPlus extends Streaming{

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }

    public function mostrarStreaming()
    {
        return "Você está conectado na AvianPlus ";
    }
}