<?php
// The parent class
class Car
{
    protected $model;

    // kalo protected itu gabisa langsung mengakses variabelnya. Tapi kalo dari method bisa

    public function setModel($model)
    {
        $this->model = $model;
    }
}

class SportCar extends Car
{
    public function hello()
    {
        echo "Beep I am a <i> " . $this->model . "</i></br>";
    }
}



$sportCar1 = new SportCar();
$sportCar1->setModel("Rubicorn");
$sportCar1->hello();

// code dibawah ini tidak bisa diekesekusi karena variabel model tidak bisa digunakan langsung
$avansa = new Car();
$avansa->model = "Mobil keluarga";
echo $avansa->model;
