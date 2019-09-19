<?php

class Produk{
		public $judul,
				$penulis,
				$penerbit,
				$harga;

		public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="0")
		{
			$this->judul = $judul;
			$this->penulis =$penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
}

class CetakProdukLengkap{
		public function cetak($produk){
			$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
			return $str;
		}
}


// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul ="Uncharted";
// $produk2->tambahProperty = "hahaha";

// var_dump($produk2);

$produk3 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$infoproduk = new CetakProdukLengkap();

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit ="Sony Computer";
$produk4->harga =250000;


echo "Komik : ".$produk3->getLabel();
echo "<br/>";
echo "Game : ".$produk4->getLabel();
echo "<br/>";
echo "Game : ".$infoproduk->cetak($produk3);