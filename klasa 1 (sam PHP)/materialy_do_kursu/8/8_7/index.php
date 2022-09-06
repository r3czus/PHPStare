<?php
class Product {
	// Wlasciwosci
	public $id;
	public $name;
	public $price;
	// Konstruktor
	public function __construct( $id, $name, $price ) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}
	// Metody
	public function showInfo() {
		echo $this->id . '<br/>';
		echo $this->name . '<br/>';
		echo $this->price . '<br/>';
	}
}


