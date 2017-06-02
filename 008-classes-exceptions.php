<?php
class Product
{

	private $price = 0;

	public function __construct($price)
	{
		$this->setPrice($price);
	}

	public function setPrice($price)
	{
		if(!is_numeric($price)) {
			throw new Exception("Price must be a number");
		}
		$this->price = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}
}

$product = new Product(3.45);
echo $product->getPrice() . PHP_EOL;

try
{
	$product = new Product("Banana");
	echo $product->getPrice();

} 
catch(Exception $e) 
{
	echo "Caught an exception" . PHP_EOL;
}
