<?php
class MyClass
{
	private $fruit = "Apple";
	private $vegetable = "Carrot";
	private $mineral = "Salt";

	public function getFruit()
	{
		return $this->fruit;
	}

	public function getVegetable()
	{
		return $this->vegetable;
	}

	public function getMineral()
	{
		return $this->mineral;
	}
}

$myClass = new MyClass();
$methods = array('getFruit', 'getVegetable', 'getMineral');
foreach($methods as $method) 
{
	echo "Going to call the method $method" . PHP_EOL;
	echo $myClass->{$method}() . PHP_EOL;
}
