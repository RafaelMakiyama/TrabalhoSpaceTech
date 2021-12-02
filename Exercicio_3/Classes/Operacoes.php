<?php

class Operacoes implements OperacoesBanco{

    public function encontraCorrentista(array $todosCorrentistas , String  $cpfProcurado)
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