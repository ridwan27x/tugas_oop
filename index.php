<?php

// Parent class Kulkas
class Kulkas {
    // Property dengan access modifier sesuai permintaan
    public $merk;
    protected $warna;
    private $kapasitas;

    // Constructor
    public function __construct($merk, $warna, $kapasitas) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kapasitas = $kapasitas;
        echo "Kulkas {$this->merk} telah dibuat.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Kulkas {$this->merk} telah dihancurkan.<br>";
    }

    // Setter
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setKapasitas($kapasitas) {
        $this->kapasitas = $kapasitas;
    }

    // Getter
    public function getWarna() {
        return $this->warna;
    }

    public function getKapasitas() {
        return $this->kapasitas;
    }

    // Method
    public function getInfo() {
        return "Kulkas {$this->merk}, warna {$this->warna}, kapasitas {$this->kapasitas} liter.";
    }
}

// Child class Makanan yang mengextends Kulkas
class Makanan extends Kulkas {
    // Property tambahan khusus untuk class Makanan
    private $jenis;

    // Constructor
    public function __construct($merk, $warna, $kapasitas, $jenis) {
        parent::__construct($merk, $warna, $kapasitas);
        $this->jenis = $jenis;
        echo "Makanan jenis {$this->jenis} telah dimasukkan ke dalam kulkas {$this->merk}.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Makanan jenis {$this->jenis} telah diambil dari kulkas {$this->merk}.<br>";
        parent::__destruct();
    }

    // Setter
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    // Getter
    public function getJenis() {
        return $this->jenis;
    }

    // Method override (polymorphism)
    public function getInfo() {
        return "Makanan jenis {$this->jenis}, dimasukkan ke dalam kulkas {$this->merk}, warna {$this->getWarna()}, kapasitas {$this->getKapasitas()} liter.";
    }
}

// Instansiasi object dari masing-masing class
$kulkas1 = new Kulkas("Samsung", "putih", 200);
$makanan1 = new Makanan("LG", "silver", 150, "Buah");

// Set semua property dari objectnya
$kulkas1->setWarna("hitam");
$makanan1->setJenis("Makanan Instan");

// Get semua property dari objectnya
echo "Info Kulkas 1: " . $kulkas1->getInfo() . "<br>";
echo "Info Makanan 1: " . $makanan1->getInfo() . "<br>";
