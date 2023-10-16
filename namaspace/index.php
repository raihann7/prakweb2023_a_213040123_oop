<?php 

require_once 'App/init.php';

//$produk1 = new Komik("Solo Leveling", "Chu-Gong", "D&C Media", 68000, 100);
//$produk2 = new Game("Apex Legends", "Respawn Entertainment", "Electronic Arts", 50000, 50);

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk( $produk1 );
//$cetakProduk->tambahProduk( $produk2 );
//echo $cetakProduk->cetak();

//echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
