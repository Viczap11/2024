<?php

echo "<body style = 'background-color : black'>";



//BREAK PARA WHILE
echo "<h1 style = 'color: #fff';> WHILE - BREAK </h1>";

$i = 0;
while ($i < 10) {
    $i++;
    if ($i == 9)
        break;
    echo "<h3 style = 'color: #fff';>", $i, " </h3";
}


echo "<br> <br>";
//CONTINUE PARA WHILE
echo "<h1 style = 'color: #fff';> WHILE - CONTINUE </h1>";

$i = 0;
while ($i < 10) {
    $i++;
    if ($i == 7)
        continue;
    echo "<h3 style = 'color: #fff';>", $i, " </h3";
}
echo "<br> <br>";

//BREAK DO WHILE
echo "<h1 style = 'color: #fff';> DO WHILE - BREAK </h1>";
$i = 0;
do {
    $i++;
    if ($i == 5)
        break;
    echo "<h3 style = 'color: #fff';>", $i, " </h3";
} while ($i < 10);


echo "<br> <br>";
//CONTINUE DO WHILE
echo "<h1 style = 'color: #fff';> DO WHILE - CONTINUE </h1>";

$i = 0;
do {
    $i++;
    if ($i == 3)
        continue;
    echo "<h3 style = 'color: #fff';>", $i, " </h3";
} while ($i < 10);
?>