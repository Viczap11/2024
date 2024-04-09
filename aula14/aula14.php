<?php

$cars = array("Fusca", "Ferrari", "Lamborghini", 1.1354575181);

echo $cars[0];
echo "<br>";
echo $cars[1];
echo "<br>";
echo $cars[2];
echo "<br>";
var_dump($cars);
echo "<br>";
echo "<br>";
echo "######################################";
echo "<br>";
echo "<br>";

//
foreach ($cars as $x){
    echo "$x <br>";
}

$cars = [
    0 => "Chevrolet",
    1 => "Honda",
    2 => "Toyota" 
];


echo "<br>";
echo "######################################";
echo "<br>";

foreach ($cars as $x => $y){
    echo "$x: $y <br>";
};

$numero = array(1, 3, 8);
for ($i = 3 ;$i < 10; $i++){
    $numero[$i] = $i;
    echo "<br> $numero[$i]";
}
echo "<br>";
var_dump($numero);

array_push($numero, 5); //adiciona qualquer valor nesse vetor 
echo "<br>";
echo "<br>";
var_dump($numero);
?>