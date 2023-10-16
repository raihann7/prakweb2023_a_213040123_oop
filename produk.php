<?php

class Produk {
    public  $judul = "judul",
            $penulis ="penulis",
            $penerbit ="penerbit",
            $harga =0;

    public function getLabel() {
        return "$this->penulis,  $this->penerbit";
    }

} 

//$produk1 = new Produk();
//$produk1->judul ="itachi";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk->judul = "tekken6";
//$produk2->tambahProperty = "kamuhebat";
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Solo Leveling";
$produk3->penulis = "Chu-Gong";
$produk3->penerbit = "D&C Media";
$produk3->harga = 68000;

$produk4 = new Produk();
$produk4->judul = "Apex Legends";
$produk4->penulis = "Respawn Entertainment";
$produk4->penerbit = "Electronic Arts";
$produk4->harga = 50000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
