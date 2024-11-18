<?php
class Car
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!";
    }
}

$car1 = new Car($model, $color);
$car1->brand = "Toyota";

$car2 = new Car($model, $color);
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand;
