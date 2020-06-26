<?php
	 class Product{

	 	protected $name = "Product Name";
	 	// protected $size = "Product Size";
	 	// protected $price = 0.0;


	 	# read methods
	 	public function getName() 
	 	{
	 		return $this->name;
	 		// echo $this->name;
	 	}

	 	// public function getSize() : String
	 	// {
	 	// 	return $this->size;
	 	// }

	 	// public function getPrice() : String
	 	// {
	 	// 	return $this->price;
	 	// }


	 	# write methods
	 	public function setName($name)
	 	{
	 		$this->name = $name;
	 		// echo "\n";
	 		// echo $this->name = $name;
	 		// if(is_string($name) && strlen($name)<64)
	 		// {
	 		// 	$this->name = (string)$name;
	 		// }
	 		// else
	 		// {
	 		//     $this->name = substr((string)$name,0,64);	
	 		// }
	 	}

	 	// public function setSize($size)
	 	// {
	 	// 	if(is_string($size) && strlen($size)<16)
	 	// 	{
	 	// 		$this->size = (string)$size;
	 	// 	}
	 	// 	else
	 	// 	{
	 	// 	    $this->size = substr((string)$size,0,5);	
	 	// 	}
	 	// }

	 	// public function setPrice($price)
	 	// {
	 	// 	if(is_numeric($price))
	 	// 	{
	 	// 		$this->price = (float)$price;
	 	// 	}
	 	// 	else
	 	// 	{
	 	// 	    $this->price = 0.0;	
	 	// 	}
	 	// }

	 	public function showInfo()
	 	{
	 		echo "Product: ".$this->name."\n";
	 		// echo "Size: ".$this->size."\n";
	 		// echo "Price: ".$this->price."\n";

	 	}
	 }

	 $shirt = new Product;
	 $shirt->setName(23);
	 // $shirt->setSize("M");
	 // $shirt->setPrice(2500.00);
	 
	
	 echo "Php version : ".phpversion();
	  echo "\n";
	 echo $shirt->getName();
	  echo "\n";
	 $shirt->showInfo();

	 echo $shirt->setName("xero");
	 echo "\n";
	 echo $shirt->getName();
	 echo "\n";
	 $shirt->showInfo();
