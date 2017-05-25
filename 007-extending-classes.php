<?php
class BaseClass {
	public $var = null;

	public function getVar() {
		echo 'From BaseClass' . PHP_EOL;
		return $this->var;
	}

	public function setVar($var) {
		echo 'From BaseClass' . PHP_EOL;
		$this->var = $var;
	} 
}

class SubClass extends BaseClass {

	public function getVar() {
		echo 'From SubClass:' . PHP_EOL;
		return parent::getVar();
	}

	public function setVar($var) {
		echo 'From SubClass:' . PHP_EOL;
		parent::setVar($var);
	}
}

$myClass = new SubClass();
$myClass->setVar("Kiwi");
echo $myClass->getVar() . PHP_EOL;
