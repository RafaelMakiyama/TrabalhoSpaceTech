<?php

class AnimaKaiTv2 extends Streaming{

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }

    public function mostrarStreaming()
    {
        return "Você está conectado na AnimaKaiTv";
    }    
}