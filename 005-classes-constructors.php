<?php
class MySimpleClass {

	public $var = null;

	public function __construct($var) {
		$this->var = $var;
	}
}

$myClass = new MySimpleClass("Pineapple");

echo $myClass->var . PHP_EOL;