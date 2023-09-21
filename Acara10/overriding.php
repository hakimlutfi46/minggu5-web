<?php
class Car
{
    public function hello()
    {
        return "Beep";
    }
}

class SportCar extends Car
{
    public function hello()
    {
        return "Hello";
    }
}

$sportCar1 = new SportCar();
echo $sportCar1->hello();
