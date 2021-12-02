<?php

class Operacoes implements OperacoesBanco{

    public function encontraCorrentista($todosCorrentistas = [], $cpfProcurado)
    {
        foreach($todosCorrentistas as $correntista)
        {
            if($correntista->getCPFCliente() == $cpfProcurado)
            {
                return $correntista;
            }
        }
    }
    
}