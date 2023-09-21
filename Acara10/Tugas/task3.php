<?php
class Tablet
{
    private $merk;
    private $camera;
    private $memory;

    public function __construct($merk, $camera, $memory)
    {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfoTablet()
    {
        return "Merk: {$this->merk}, Kamera: {$this->camera}, Memory: {$this->memory}";
    }
}

class Handphone extends Tablet
{
    public $handphone_baru;

    public function beli_handphone($handphone_baru)
    {
        $this->handphone_baru = $handphone_baru;
    }
}

$handphone = new Handphone("Apple", "16 MP", "128 GB");
echo "Informasi Handphone: " . $handphone->getInfoTablet() . "<br>";
$handphone->beli_handphone("Google Pixel");
echo "Handphone Baru: " . $handphone->handphone_baru . "<br>";
