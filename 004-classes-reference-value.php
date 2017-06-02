<?php

class SimpleClass
{
	public $var = null;

	public function setVar($var)
    {
		$this->var = $var;
	}

	public function getVar()
    {
		return $this->var;
	}
}

//create instance of our class
$instance = new SimpleClass();

//Create by value variable
$myClassByValue = $instance;

//create by reference variable
$myClassByReference =& $myClassByValue;

$myClassByValue->setVar("Apple");

//Will output AppleApple
echo $myClassByReference->getVar() . PHP_EOL;
echo $myClassByValue->getVar() . PHP_EOL;

$myClassByReference->setVar("Banana");

//Will output BananaBanana
echo $myClassByReference->getVar() . PHP_EOL;
echo $myClassByValue->getVar() . PHP_EOL;

$instance = null;

var_dump($instance);
var_dump($myClassByValue);
var_dump($myClassByReference);

$myClassByValue = null;

var_dump($instance);
var_dump($myClassByValue);
var_dump($myClassByReference);