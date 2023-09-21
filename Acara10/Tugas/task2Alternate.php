<?php
class Produk
{
    protected $nama;
    protected $ukuran;
    protected $warna;

    public function __construct($nama, $ukuran, $warna)
    {
        $this->nama = $nama;
        $this->ukuran = $ukuran;
        $this->warna = $warna;
    }

    public function getInfoProduk()
    {
        return [
            "Nama" => $this->nama,
            "Ukuran" => $this->ukuran,
            "Warna" => $this->warna,
        ];
    }
}

$produk1 = new Produk("Baju", "XL", "Hijau");
$produk2 = new Produk("Celana", "L", "Merah");
$produk3 = new Produk("Topi", "M", "Biru");

$produkArr = [$produk1, $produk2, $produk3];

// Menggunakan foreach untuk menampilkan properti-produk dari semua objek
foreach ($produkArr as $produk) {
    echo "Produk: <br>";

    foreach ($produk->getInfoProduk() as $key => $value) {
        echo "$key : $value <br>";
    }
    echo "<br>";
}
