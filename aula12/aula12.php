<?php 
echo "<br>";
echo "##################";
echo "<br>";
echo "<br>";

$colors = array("red", "green", "blue", "yellow","orange");

//FOREACH Serve para trocar a variável com algum valor de alguma array (Serve também como um laço de repetição, podendo utilizar o continue e o break)

foreach($colors as $x){
    echo "$x <br>";
}

echo "<br>";
echo "##################";
echo "<br>";
echo "<br>";

$membros = array("Victor" => "Gosta da Erika", "Erika" => "Talvez saiba");

foreach($membros as $x => $y){
    echo ("$x : $y");
    echo "<br>";
}

echo "<br>";
echo "##################";
echo "<br>";
echo "<br>";

foreach($colors as $x){
    if($x == "blue" ){
        break;
    }
    echo "$x <br>";
}

echo "<br>";
echo "##################";
echo "<br>";
echo "<br>";

foreach($colors as $x){

    if($x == "blue" ){
        continue;
    }
    echo "$x <br>";
}
echo "<br>";
echo "##################";
echo "<br>";
echo "<br>";

foreach ($colors as &$x){
    if($x == "blue"){
        $x = "pink";
    }
}
var_dump($colors);
?> 