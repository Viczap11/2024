<?php
$nome = "Victor";
$sobrenome = "Carvalho";
$idade = 16;
$numero = 23210;
$dia = 22;
$valordia = 700.5;
$salario = $dia * $valordia;

/*CALCULADORA ENTRE GRANDES ASPAS */

$a = 10;
$b = 20;
$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
echo "Olá, " . $nome . " " . $sobrenome . " do RM " . $numero . "<br> Idade: " . $idade . "<br> No final do mês você receberá: R$" . $salario . ",00";
print "<br> Por dia você ganha: R$ " . $valordia;
print "<br> <br> Você trabalha por " . $dia . " dias";

print "<br>#####################################################";
echo "<br>Soma: " . $soma;
echo "<br>Subtração: " . $subtracao;
print "<br>Multiplicação: " . $multiplicacao;
print "<br>Divisão: " . $divisao;
print "<br>#####################################################";
print "<br>";
//Para exibir algo na tela utiliza-se echo e print  

/*O Var_dump basicamente serve para exibir as informações do TIPO da sua variável */
var_dump([2, 5, 37.99999999]);

?>