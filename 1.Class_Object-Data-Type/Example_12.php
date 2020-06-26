<?php
	
	 class Product{

	 	private $name="Asfaq";
	 	protected $size="M";
	 	public $price;

	 	public function showInfo()
	 	{
	 		echo "Product: ".$this->name."\n";
	 		echo "Size: ".$this->size."\n";
	 		echo "Price: ".$this->price."\n";

	 		var_dump($this);
	 	}
	 }

	 $shirt = new Product;
	 // $shirt->name = "T-Shirt";
	 // $shirt->size;
	 $shirt->price = 2000.00;
	 $shirt->showInfo();
