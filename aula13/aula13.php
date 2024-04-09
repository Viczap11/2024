<?php 
class Car
{
    public $color;

    public $model;

    public $praca;

    public function __construct($color, $model, $praca)
    {
        $this->color = $color;
        $this->model = $model;
        $this->praca = $praca;
    }

}

$myCar = new Car("Prata", "Civic", "FOB4435");
$myCarro = new Car("Preto", "Celta", "ERX4435");
foreach($myCar as $x => $y) {
    echo "$x: $y <br>";
}

echo "<br><br>";
foreach($myCarro as $x => $y) {
    echo "$x: $y <br>";
}


?>