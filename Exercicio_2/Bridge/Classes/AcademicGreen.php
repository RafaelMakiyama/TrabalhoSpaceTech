<?php

class AcademicGreen extends Streaming {

    public function conexaoBancoDeDados()
    {  
       return $this->conexao->connection(); 
    }

    public function mostrarStreaming()
    {
        return "Você está  na AcademicGren ";
    }

}