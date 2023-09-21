<?php
// The parent class
class Car
{
    public $model;

    public function setModel($model)
    {
        $this->model = $model;
    }
}

class SportsCar extends car
{
    public function hello()
    {
        echo "beep! I am a <i>" . $this->model  . " </i><br/>";
    }
}

$sportCar1 = new SportsCar();
$sportCar1->setModel("Lamborgini");

$sportCar1->hello();
