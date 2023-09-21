<?php
class ItemProduk
{
    protected $ukuran;
    protected $warna;
    protected $nama;

    public function Ukuran()
    {
        return $this->ukuran;
    }

    public function Warna()
    {
        return $this->warna;
    }

    public function Nama()
    {
        return $this->nama;
    }
}

class Topi extends ItemProduk
{
    private $model;

    public function __construct($ukuran, $warna, $nama, $model)
    {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->nama = $nama;
        $this->model = $model;
    }

    public function Model()
    {
        return $this->model;
    }
}

class Celana extends ItemProduk
{
    private $tipe;
    private $model;

    public function __construct($ukuran, $warna, $nama, $tipe, $model)
    {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->nama = $nama;
        $this->tipe = $tipe;
        $this->model = $model;
    }

    public function Tipe()
    {
        return $this->tipe;
    }

    public function Model()
    {
        return $this->model;
    }
}

class Baju extends ItemProduk
{
    private $tipe;

    public function __construct($ukuran, $warna, $nama, $tipe)
    {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->nama = $nama;
        $this->tipe = $tipe;
    }

    public function Tipe()
    {
        return $this->tipe;
    }
}

$topi = new Topi('XL', 'Merah', 'Topi Olahraga', 'Snapback');
$celana = new Celana('L', 'Biru', 'Celana Jeans', 'Panjang', 'Regular Fit');
$baju = new Baju('M', 'Putih', 'Kemeja', 'Lengan Panjang');

// Mendapatkan informasi produk
echo "Topi: " . $topi->Nama()
    . ", Ukuran: " . $topi->Ukuran()
    . ", Warna: " . $topi->Warna()
    . ", Model: " . $topi->Model() . "<br>";

echo "Celana: " . $celana->Nama()
    . ", Ukuran: " . $celana->Ukuran()
    . ", Warna: " . $celana->Warna()
    . ", Tipe: " . $celana->Tipe()
    . ", Model: " . $celana->Model() . "<br>";

echo "Baju: " . $baju->Nama()
    . ", Ukuran: " . $baju->Ukuran()
    . ", Warna: " . $baju->Warna()
    . ", Tipe: " . $baju->Tipe() . "<br>";
