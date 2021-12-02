<?php 
class MyExpenses
{
    private $nome, $cpf, $despesas;
    
    public function __construct(String $nome, String $cpf, array $despesas)
    {
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->despesas = $despesas;
    }

    public function getCpf(){
      return $this->cpf;
    }

    public function totalizaMes(int $mes)
    {
      $valor=0;
      foreach($this->despesas as $despesa){
        if($despesa->getMes() == $mes){          
          $valor+= $despesa->getValor();
        }
      }

      $despesaMes = new DespesaMes( $mes, $valor);
      return $despesaMes; 
    }

    public function gravaInfos(DespesaMes $despesaMes)
    {
      $arquivo = fopen("{$this->nome}.txt", "w+");
      fwrite($arquivo, serialize($despesaMes));
      fclose($arquivo);
      echo "Arquivo do {$this->nome} criado com sucesso!!";
    }
    
}