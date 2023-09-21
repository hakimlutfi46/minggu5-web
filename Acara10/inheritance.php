<?php
// Parent Class

class Car
{
    // private setter method
    private $model;

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function hello()
    {
        return "beep I am a <i>" . $this->model . "</i></br>";
    }
}

// the child class inehrits the code from the parent class
class SportsCar extends Car
{
    // no code in the child class
}

// create an instance from the child class
$sportCar = new SportsCar();
$sportCar->setModel("Mercedes Bens");
echo $sportCar->hello();
