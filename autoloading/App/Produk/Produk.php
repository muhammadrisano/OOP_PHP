<?php
abstract class Produk{
	protected $judul,
			$penulis,
			$penerbit,
			$harga;
	protected $diskon=0;


	public function __construct($judul ="judul", $penulis ="penulis", $penerbit="penerbit", $harga=0){
		$this->judul =$judul;
		$this->penulis =$penulis;
		$this->penerbit =$penerbit;
		$this->harga =$harga;
		
	}
	public function getDiskon(){
		return $this->diskon;
	}
	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}
	
	Abstract function getInfo();

	
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getJudul(){
		return $this->judul;
	}
	public function setJudul($judul){
		$this->judul = $judul;
	}
	public function getPenulis(){
		return $this->penulis;
	}
	public function setPenulis($penulis){
		$this->penulis= $penulis;
	}
	public function getPenerbit(){
		return $this->penerbit;
	}
	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}


}