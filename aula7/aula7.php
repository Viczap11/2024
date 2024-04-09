<?php

//Cast é como se significasse alteração para um outro tipo de variável 


//CAST PARA STRING

echo "<br>";
echo "Cast para String";
echo "<br>";
$a = 5; //INTEGER
$b = 5.34; //FLOAT
$c = "hello"; //STRING
$d = true; //BOOELAN
$e = NULL; //NULL 

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

echo "<br>";
echo $a . " <br> " . $b . " <br> " . $c . " <br> " . $d . " <br> " . $e;

echo "<br>";

var_dump("$a");
echo "<br>";
var_dump("$b");
echo "<br>";
var_dump("$c");
echo "<br>";
var_dump("$d");
echo "<br>";
var_dump("$e");

echo "<br>";
//CAST PARA INTEIRO
echo "<br>";
echo "Cast para inteiro";
echo "<br>";

$a = 5; //INTEGER
$b = 5.34; //FLOAT
$c = "TRINTA E NOVE CEBOLAS"; //STRING
$d = true; //BOOELAN
$e = NULL; //NULL 

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;

var_dump("$a");
echo "<br>";
var_dump("$b");
echo "<br>";
var_dump("$c");
echo "<br>";
var_dump("$d");
echo "<br>";
var_dump("$e");

echo "<br>";
echo "<br>";

echo $a . " <br> " . $b . " <br> " . $c . " <br> " . $d . " <br> " . $e;

echo "<br>";
//CAST PARA B0LEAN0
echo "<br>";
echo "Cast para b0lean0";
echo "<br>";

$a = 5; //INTEGER
$b = 5.34; //FLOAT
$c = "TRINTA E NOVE CEBOLAS"; //STRING
$d = true; //BOOELAN
$e = NULL; //NULL 

$a = (boolean) $a;
$b = (boolean) $b;
$c = (boolean) $c;
$d = (boolean) $d;
$e = (boolean) $e;

var_dump("$a");
echo "<br>";
var_dump("$b");
echo "<br>";
var_dump("$c");
echo "<br>";
var_dump("$d");
echo "<br>";
var_dump("$e");

echo "<br>";
echo "<br>";

echo $a . " <br> " . $b . " <br> " . $c . " <br> " . $d . " <br> " . $e;

echo "<br>";
//CAST PARA FLOAT
echo "<br>";
echo "Cast para float ";
echo "<br>";

$a = 5; //INTEGER
$b = 5.34; //FLOAT
$c = "TRINTA E NOVE CEBOLAS"; //STRING
$d = true; //BOOELAN
$e = NULL; //NULL 

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;

var_dump("$a");
echo "<br>";
var_dump("$b");
echo "<br>";
var_dump("$c");
echo "<br>";
var_dump("$d");
echo "<br>";
var_dump("$e");

echo "<br>";
echo "<br>";

echo $a . " <br> " . $b . " <br> " . $c . " <br> " . $d . " <br> " . $e;

echo "<br>";
//CAST PARA NULL
echo "<br>";
echo "Cast para float ";
echo "<br>";

$a = 5; //INTEGER
$b = 5.34; //FLOAT
$c = "TRINTA E NOVE CEBOLAS"; //STRING
$d = true; //BOOELAN
$e = NULL; //NULL 

$a = (null);
echo "O valor não pode se converter a Nulo" . $a . "<br>";
$b = (null);
echo "O valor não pode se converter a Nulo" . $b . "<br>";
$c = (null);
echo "O valor não pode se converter a Nulo" . $c . "<br>";
$d = (null);
echo "O valor não pode se converter a Nulo" . $d . "<br>";
$e = (null);
echo "O valor não pode se converter a Nulo" . $e . "<br>";

var_dump("$a");
echo "<br>";
var_dump("$b");
echo "<br>";
var_dump("$c");
echo "<br>";
var_dump("$d");
echo "<br>";
var_dump("$e");

echo "<br>";
echo "<br>";

echo $a . " <br> " . $b . " <br> " . $c . " <br> " . $d . " <br> " . $e;
?>