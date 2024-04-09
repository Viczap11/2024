<?php
$favcolor = "green";

//SWITCH CASE : tipo um laço condicional que vai testar de acordo com o valor especificado, uma forma mais prática de fazer um if else

//Teste com String
switch ($favcolor) {
    case 'red';
        echo "Sua cor favorita é vermelho";
        break;
    case 'blue';
        echo "Sua cor favorita é azul";
        break;
    case 'green';
        echo "Sua cor favorita é verde";
        break;
    case 'white';
        echo "Sua cor favorita é branco";
        break;
    default:
        echo "Não existe essa cor";
}

//Teste com Int
$teste = (rand(0, 4));
switch ($teste) {
    case '0';
        echo "<br>0";
        break;
    case '1';
        echo "<br>1";
        break;
    case '2';
        echo "<br>2";
        break;
    case '3';
        echo "<br>3";
        break;
    default:
        echo "<br>Você fez o L";
}

?>