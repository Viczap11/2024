<?php
$teste = (rand(0, 22));

//Esse IF ELSE é igual ao da lingaugem de programação JAVA

if ($teste > 10) {
    echo "não vou falar com ela";
} else if ($teste <= 10) {

    echo "vou falar com ela";
}

echo "<br>";
echo $teste;
echo "<br>";

/*
== (IGUAL)
=== (IDÊNTICO)
!= (DIFERENTE)
<> (DIFERENTE)
!== (NÃO IDÊNTICO)
> (MAIOR) 
< (MENOR)
>= (MAIOR IGUAL)
<= (MENOR IGUAL)
*/

if ($teste == 13) {
    echo "FAZ O L";
} else if ($teste == 22) {
    echo "FAZ O B";
} else {
    echo "Não é 13 nem 22";
}

$teste2 = 13;
if ($teste === 13) {
    echo ("<br>Fez o L profundamente (tipo igual e valor igual também");

}
if ($teste === 22) {
    echo ("<br>Fez o B profundamente (tipo e valor igual)");

}

?>