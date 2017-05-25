<?php
class SimpleClass {

	public $var = null;

	public function setVar($value) {
		$this->var = $value;
	}

	public function getVar() {
		return $this->var;
	}

	public function setVar2($value) {
		$var = $value;
	}
}

$myClass = new SimpleClass();
$myClass->setVar("Apple");
$myClass->setVar2("Banana");
echo $myClass->getVar() . PHP_EOL;