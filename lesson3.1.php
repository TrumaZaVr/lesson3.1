<?php
class car
{
    public $brand;
    public $model;
    public $colour;
    public $type;
    public $price;

    public function __construct($brand, $model, $colour, $type, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->colour = $colour;
        $this->type = $type;
        $this->price = $price;
    }

    public function getInfo()
    {
        echo $this->brand . PHP_EOL;
        echo $this->model . PHP_EOL;
        echo $this->colour . PHP_EOL;
        echo $this->type . PHP_EOL;
        echo $this->price . PHP_EOL;
        echo "<br />";
    }
}
echo ' <b>Список автомобилей:</b> <br/>';
$carOne = new Car('BMW','324', 'черный', 'купэ', 3500);
$carOne-> getInfo ();
$carTwo = new Car('Mercedes','320', 'белый', 'седан', 4000);
$carTwo-> getInfo ();

class TV
{
    public $brand;
    public $model;
    public $type;
    public $price;

    public function __construct($brand, $model, $type, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
    }

    public function getInfo()
    {
        echo $this->brand . PHP_EOL;
        echo $this->model . PHP_EOL;
        echo $this->type . PHP_EOL;
        echo $this->price . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>Список теливизоров:</b> <br/>';
$TVOne = new TV('SUMSUNG','UE65KS7500U', 'QLED TV', '35000');
$TVOne-> getInfo ();
$TVTwo = new TV('LG','55LH609V', 'LED', '29000');
$TVTwo-> getInfo ();

class Pen
{
    public $brand;
    public $colore;
    public $price;

    public function __construct($brand, $colour, $price)
    {
        $this->brand = $brand;
        $this->colour = $colour;
        $this->price = $price;
    }


    public function getInfo ()
    {
        echo $this -> brand . PHP_EOL;
        echo $this -> colour . PHP_EOL;
        echo $this -> price . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>Список Шариковых ручек:</b> <br/>';
$PenOne = new Pen('Parker','Tactical Grey Green BP', '900');
$PenOne-> getInfo ();
$PenTwo = new Pen('Pilot','BPS-GP', '47');
$PenTwo-> getInfo ();


class Duc
{
    public $name;
    public $mainland;
    public $total_length;

    public function __construct($name, $mainland, $total_length)
    {
        $this->name = $name;
        $this->mainland = $mainland;
        $this->total_length = $total_length;
    }


    public function getInfo ()
    {
        echo $this -> name . PHP_EOL;
        echo $this -> mainland . PHP_EOL;
        echo $this -> total_length . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>Утки мира:</b> <br/>';
$DucOne = new Duc('Mergellus albellus','Eurasia', '38—44 см');
$DucOne-> getInfo ();
$DucTwo = new Duc('Dendrocygna bicolor','Africa', '45—53 см');
$DucTwo-> getInfo ();

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }


    public function getInfo ()
    {
        echo $this -> name . PHP_EOL;
        echo $this -> price . PHP_EOL;
        echo $this -> quantity . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>Список покупок:</b> <br/>';
$ProductOne = new Product('Milk','48', '1');
$ProductOne-> getInfo ();
$ProductTwo = new Product('Flakes','120', '1');
$ProductTwo-> getInfo ();
