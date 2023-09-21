<?php
class MobilLengkap
{
    private $tvStatus = false;

    public function nontonTV()
    {
        if ($this->tvStatus) {
            echo "TV sedang menampilkan gambar." . "<br>";
        } else {
            echo "TV dihidupkan." . "<br>";
            echo "TV mencari channel." . "<br>";
            echo "TV menampilkan gambar." . "<br>";
            $this->tvStatus = true;
        }
    }
}

class MobilBMW extends MobilLengkap
{
    // Kelas MobilBMW mewarisi method nontonTV dari MobilLengkap
}

class MobilBMWberaksi
{
    public function nontonTv()
    {
        $mobil = new MobilBMW();
        $mobil->nontonTV();
    }

    public function HidupkanMobil()
    {
        echo "Mobil BMW dihidupkan." . "<br>";
    }

    public function MatikanMobil()
    {
        echo "Mobil BMW dimatikan." . "<br>";
    }

    public function ubahGigi()
    {
        echo "Gigi mobil BMW diubah." . "<br>";
    }
}

// Menggunakan kelas MobilBMWberaksi
$aksiMobil = new MobilBMWberaksi();
$aksiMobil->HidupkanMobil();
$aksiMobil->nontonTv(); //pada function ini akan menghasilkan beberapa output karena merupakan turunan
$aksiMobil->MatikanMobil();
$aksiMobil->ubahGigi();
