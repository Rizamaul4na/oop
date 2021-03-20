<?php

class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new Produk();
//var_dump($produk1);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "3000";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "25000";

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

// ini Property dan Method