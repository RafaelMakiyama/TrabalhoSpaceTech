<?php

class DespesaDia extends DespesaMes{
    private int $dia;
    
    public function __construct(int $dia, int $mes, float $valor){
        
        $this->dia = $dia;
        $this->mes= $mes;
        $this->valor= $valor;
    }


    public function getDia()
    {
        return $this->dia;
    }


} 



?>