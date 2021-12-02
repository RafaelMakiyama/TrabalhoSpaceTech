<?php

require_once 'autoload.php';

    $c1 = new Correntista('123.456.789-00', '2.00');
    $c2 = new Correntista('987.654.321-00', '5.00');
    $c3 = new Correntista('134.596.609-10', '10.00');
    $correntistas = [$c1, $c2, $c3];
    $m1 = new Movimentacao($c1, '500.71');
    $m2 = new Movimentacao($c2, '912.85');
    $movimentacaoConta = [$m1, $m2];
    $operacao = new Operacoes;
    movimentarConta($correntistas, $movimentacaoConta, $operacao);

    function movimentarConta($correntistas = [], $movimentacaoConta = [], $operacao)
    {
        foreach($movimentacaoConta as $movimentacao) {

            $correntista = $operacao->encontraCorrentista($correntistas, $movimentacao->getCPFCorrentista());
            $correntista->setSaldo($movimentacao->getValorMovimento());

            $arquivo = fopen($correntista->getCPFCliente() . ".txt", "w+");
            fwrite($arquivo, serialize($correntista));
            fclose($arquivo);

            echo "Arquivo do {$correntista->getCPFCliente()} criado com sucesso!! <br>";

        }
        
    }
?>