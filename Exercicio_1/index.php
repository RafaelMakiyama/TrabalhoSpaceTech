<?php 

require_once 'autoload.php';

$despesas = array();
$despesaDia = new DespesaDia( 01,  01,  01);
$despesaDia2 = new DespesaDia( 02,  01,  200);
$despesaDia3 = new DespesaDia( 03,  03,  03);
$despesas = [$despesaDia, $despesaDia2, $despesaDia3];

$myexpenses = new MyExpenses( 'joao', 99999999999, $despesas);
$myexpenses->gravaInfos($myexpenses->totalizaMes(1));

?>