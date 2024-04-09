<?php



//O break pode interromper um laço de repetição

echo "<body style = 'background-color : black'>";
echo "<h1 style = 'color: #fff';> FOR - BREAK </h1>";
for ($x = 0; $x <= 10; $x++) {
    if ($x == 6) {
        echo "<p style = 'color: #fff';> O número é:  ", $x, "</p>";
        break;
    }
    echo "<p style = 'color: #fff';> O número é:  ", $x, "</p>";

}

echo "<br><br><br>";
//O continue faz "pular" uma vez o passo  
echo "<h1 style = 'color: #fff';> FOR - CONTINUE </h1>";
for ($x = 0; $x <= 10; $x++) {
    if ($x == 6) {
        continue;
    }

    echo "<p style = 'color: #fff';> O número é:  ", $x, "</p>";
}

?>